<?php

namespace App\Models;

use Phpml\Metric\Accuracy;
use Phpml\Metric\ClassificationReport;
use Phpml\Metric\ConfusionMatrix;

class LMDWKNN
{
    private $k;
    private $trainData;
    private $trainLabel;
    private $uniqueClass;
    private $accuracy;
    private $confusionMatrix;
    private $precision;
    private $recall;
    private $f1Score;
    private $average;
    private $support;

    public function __construct($k = 1)
    {
        // Tentukan nilai K
        $this->k = $k;
    }

    public function train($trainData, $trainLabel)
    {
        // Memasukkan data latih kelas nya
        $this->trainData = $trainData;
        $this->trainLabel = $trainLabel;
        $this->uniqueClass = array_values(array_unique($this->trainLabel));
    }

    public function distance($data)
    {
        // Menghitung jarak antara $data dengan setiap data training menggunakan rumus Euclidean
        $distances = [];
        foreach ($this->trainData as $originData) {
            $sum = 0;
            foreach ($originData as $j => $value) {
                $sum += pow($value - $data[$j], 2);
            }
            $distances[] = sqrt($sum);
        }
        return $distances;
    }

    public function weight($dist)
    {
        $tmp = [];
        foreach ($dist as $val) {
            $tmp[] = 1 / (float) ($val + 1);
        }
        return $tmp;
    }

    public function predict($data)
    {
        $predict = [];
        foreach ($data as $newPoint) {
            $weightClass = [];
            foreach ($this->uniqueClass as $classLabel) {
                $dist = $this->distance($newPoint);
                $classIndex = array_keys($this->trainLabel, $classLabel);
                $distClass = [];
                foreach ($classIndex as $ind) {
                    $distClass[] =  array_slice($dist, $ind, 1)[0];
                }
                sort($distClass);
                $distClass = array_slice($distClass, 0, $this->k);
                $weight = $this->weight($distClass);
                $weightClass[] = array_sum($weight) / $this->k;
            }
            $keysOfMaxValues = array_keys($weightClass, max($weightClass));
            $predict[] = $this->uniqueClass[$keysOfMaxValues[0]];
        }
        return $predict;
    }

    public function score($actualLabel, $predictedLabel)
    {
        $this->accuracy = new Accuracy();
        return $this->accuracy->score($actualLabel, $predictedLabel);
    }

    public function confusion_matrix($actualLabel, $predictedLabel)
    {
        $this->confusionMatrix = new ConfusionMatrix();
        return $this->confusionMatrix->compute($actualLabel, $predictedLabel, ['Baik', 'Sedang', 'Tidak Sehat', 'Sangat Tidak Sehat']);
    }

    public function precision($actualLabel, $predictedLabel)
    {
        $this->precision = new ClassificationReport($actualLabel, $predictedLabel);
        return $this->precision->getPrecision();
    }

    public function recall($actualLabel, $predictedLabel)
    {
        $this->recall = new ClassificationReport($actualLabel, $predictedLabel);
        return $this->recall->getRecall();
    }

    public function f1Score($actualLabel, $predictedLabel)
    {
        $this->f1Score = new ClassificationReport($actualLabel, $predictedLabel);
        return $this->f1Score->getF1score();
    }

    public function average($actualLabel, $predictedLabel)
    {
        $this->average = new ClassificationReport($actualLabel, $predictedLabel);
        return $this->average->getAverage();
    }

    public function support($actualLabel, $predictedLabel)
    {
        $this->support = new ClassificationReport($actualLabel, $predictedLabel);
        return $this->support->getSupport();
    }
}

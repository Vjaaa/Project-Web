<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Phpml\Metric\Accuracy;
use Phpml\Metric\ClassificationReport;
use Phpml\Metric\ConfusionMatrix;

class LMDWKNN extends Model
{
    private $k;
    private $x_train;
    private $y_train;
    private $accuracy;
    private $confusion_matrix;
    private $precision;
    private $recall;
    private $f1score;
    private $average;
    private $support;

    public function __construct($k = 1)
    {
        // tentukan nilai K
        $this->k = $k;
    }

    public function fit($x_train, $y_train)
    {
        // memasukkan data latih kelas nya
        $this->x_train = $x_train;
        $this->y_train = $y_train;
        $this->unique_class = array_values(array_unique($this->y_train));
    }

    public function distance($x_test)
    {
        error_reporting(E_ALL & ~E_NOTICE);
        error_reporting(error_reporting() & ~E_WARNING);

        // Calculate the Euclidean distance between $x_test and each training point
        $distances = [];
        foreach ($this->x_train as $originData) {
            $sum = 0;
            foreach ($originData as $j => $value) {
                $sum += pow($value - $x_test[$j], 2);
            }
            $distances[] = sqrt($sum);
        }
        return $distances;
    }

    public function weight($dist)
    {
        error_reporting(E_ALL & ~E_NOTICE);
        $tmp = [];
        foreach ($dist as $val) {
            $tmp[] = 1 / (float) ($val + 1);
        }
        return $tmp;
    }

    public function predict($x_test)
    {
        $predict = [];
        foreach ($x_test as $new_point) {
            $w_class = [];
            foreach ($this->unique_class as $class_label) {
                $dist = $this->distance($new_point);
                $class_ind = array_keys($this->y_train, $class_label);
                $dist_class = [];
                foreach ($class_ind as $ind) {
                    $dist_class[] =  array_slice($dist, $ind, 1)[0];
                }
                sort($dist_class);
                $dist_class = array_slice($dist_class, 0, $this->k);
                $weight = $this->weight($dist_class);
                $w_class[] = array_sum($weight) / $this->k;
            }
            $keysOfMaxValues = array_keys($w_class, max($w_class));
            $predict[] = $this->unique_class[$keysOfMaxValues[0]];
        }
        return $predict;
    }

    public function score($y_true, $y_pred)
    {
        $this->accuracy = new Accuracy();
        return $this->accuracy->score($y_true, $y_pred);
    }

    public function confusion_matrix($y_true, $y_pred)
    {
        $this->confusion_matrix = new ConfusionMatrix();
        return $this->confusion_matrix->compute($y_true, $y_pred, ['Baik', 'Sedang', 'Tidak Sehat', 'Sangat Tidak Sehat', 'Berbahaya']);
    }

    public function precision($y_true, $y_pred)
    {
        $this->precision = new ClassificationReport($y_true, $y_pred);
        return $this->precision->getPrecision();
    }

    public function recall($y_true, $y_pred)
    {
        $this->recall = new ClassificationReport($y_true, $y_pred);
        return $this->recall->getRecall();
    }

    public function f1Score($y_true, $y_pred)
    {
        $this->f1score = new ClassificationReport($y_true, $y_pred);
        return $this->f1score->getF1score();
    }

    public function average($y_true, $y_pred)
    {
        $this->average = new ClassificationReport($y_true, $y_pred);
        return $this->average->getF1score();
    }

    public function support($y_true, $y_pred)
    {
        $this->support = new ClassificationReport($y_true, $y_pred);
        return $this->support->getF1score();
    }

    public function get_params($deep = true)
    {
        return array("k" => $this->k);
    }

    public function set_params($params)
    {
        if (isset($params["k"])) {
            $this->k = $params["k"];
        }
    }
}

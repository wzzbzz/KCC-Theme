<?php

namespace KCC\Reports;


class ReportView{

    protected $report;

    public function __construct( $report ){
        $this->report = $report;
    }

    public function render(){
        echo "you need to implement render() in your subclass, which is " . str_replace(" ","",$this->report->report_type()) . "View";
    }
}
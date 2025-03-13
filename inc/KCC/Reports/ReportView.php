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

    public static function tableHeader()
      {
      ?>
      <th scope="col">Report No.</th>

      <th scope="col">Date</th>

      <th scope="col">Event</th>

      <th scope="col">Group</th>

      <th scope="col">Country</th>

      <th scope="col">State</th>

      <th scope="col">City</th>

      <th scope="col">Contact Person</th>
      <th scope="col"></th>
<?php
   }
}
<?php


namespace KCC\Reports;

class ReportType extends \jwc\Wordpress\WPTerm{

    public function __construct( $term_id, $taxonomy='kcc_report_type'){
        parent::__construct($term_id, $taxonomy);
    }

    public static function fromSlug($slug){
        // make sure the slug is a string
        $slug = (string) $slug;


        // get the term object
        $term = get_term_by('slug', $slug, 'kcc_report_type');

        if($term){
            return new ReportType($term->term_id);
        }else{
            return false;
        }
    }

    public function reports(){
        $args = array(
            'post_type' => 'kcc_report',
            'tax_query' => array(
                array(
                    'taxonomy' => 'kcc_report_type',
                    'field' => 'term_id',
                    'terms' => $this->term_id
                )
            )
        );
        return get_posts($args);
    }

    public function reports_count(){
        return count($this->reports());
    }

    public function reports_link(){
        
        return get_term_link($this->id(), 'kcc_report_type');
    }

    public function name(){
        return $this->term_name();
    }

    public function plural_name(){
        return $this->name() . "s";
    }

    public function description(){
        return $this->term_description();
    }

    public function create_url(){
        // it will be reports/create/{slug}
        return home_url('reports/' . $this->slug() . "/create");
    }

    public function getReportClass(){
        $classname = str_replace(' ', '', ucwords($this->name()));
        $class = 'KCC\Reports\\' . $classname;
        if(class_exists($class)){
            return $class;
        }else{
            return 'KCC\Reports\ReportType\Report';
        }
    }

    public function getViewClass(){
        $classname = str_replace(' ', '', ucwords($this->name()));
        $class = 'KCC\Reports\\' . $classname . 'View';
        if(class_exists($class)){
            return $class;
        }else{
            return 'KCC\Reports\ReportView';
        }
    }
        
}
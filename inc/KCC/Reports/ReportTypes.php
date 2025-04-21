<?php

namespace KCC\Reports;

class ReportTypes extends \jwc\Wordpress\WPController{

    public function init(){
        parent::init();

        // add a filter for term links
        add_filter('term_link', array($this, 'term_link'), 10, 3);
    }

    public function term_link($termlink, $term, $taxonomy){
        if($taxonomy == 'kcc_report_type'){
            return get_site_url() . '/reports/' . $term->slug;
        }
        return $termlink;
    }
}

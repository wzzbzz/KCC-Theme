<?php

namespace KCC\Forms;

class SurvivorNeedsIntakeForm extends Form
{
    protected $report_type_slug='survivor-needs-intake';

    protected $schema = [
      "form" => [
          "steps" => [
              [
                  "id" => "step-1",
                  "title" => "Information",
                  "fields" => [
                      [
                          "type" => "section",
                          "title" => "Date & Time",
                          "fields" => [
                              [
                                  "type" => "date",
                                  "name" => "intake_date",
                                  "label" => "Date",
                                  "required" => true
                              ],
                              [
                                  "type" => "time",
                                  "name" => "intake_time",
                                  "label" => "Time",
                                  "required" => true
                              ]
                          ]
                      ],
                      [
                          "type" => "section",
                          "title" => "Client Information",
                          "fields" => [
                              [
                                  "type" => "number",
                                  "name" => "intake_phone",
                                  "label" => "Primary Telephone",
                                  "required" => true,
                                  "maxLength" => 10
                              ],
                              [
                                  "type" => "text",
                                  "name" => "intake_firstName",
                                  "label" => "Client First Name",
                                  "required" => true,
                                  "readonly" => true
                              ],
                              [
                                  "type" => "text",
                                  "name" => "intake_lastName",
                                  "label" => "Client Last Name",
                                  "required" => true,
                                  "readonly" => true
                              ],
                              [
                                  "type" => "text",
                                  "name" => "intake_address",
                                  "label" => "Address",
                                  "required" => true
                              ],
                              [
                                  "type" => "text",
                                  "name" => "country",
                                  "label" => "Country",
                                  "readonly" => true
                              ],
                              [
                                  "type" => "text",
                                  "name" => "state",
                                  "label" => "State",
                                  "readonly" => true
                              ],
                              [
                                  "type" => "text",
                                  "name" => "city",
                                  "label" => "City",
                                  "readonly" => true
                              ],
                              [
                                  "type" => "number",
                                  "name" => "intake_zip",
                                  "label" => "Zip Code",
                                  "required" => true,
                                  "maxLength" => 6,
                                  "readonly" => true
                              ],
                              [
                                  "type" => "text",
                                  "name" => "intake_other",
                                  "label" => "Other",
                                  "required" => true
                              ],
                              [
                                  "type" => "number",
                                  "name" => "intake_phone2",
                                  "label" => "Alternative Telephone",
                                  "maxLength" => 10
                              ],
                              [
                                  "type" => "select",
                                  "name" => "intake_contact_time",
                                  "label" => "Best Time to Contact",
                                  "options" => [
                                      ["value" => "", "label" => "Select Time", "default" => true],
                                      ["value" => "Weekday Mornings", "label" => "Weekday Mornings"],
                                      ["value" => "Weekday Afternoons", "label" => "Weekday Afternoons"],
                                      ["value" => "Weekday Nights", "label" => "Weekday Nights"],
                                      ["value" => "Weekend Mornings", "label" => "Weekend Mornings"],
                                      ["value" => "Weekend Afternoons", "label" => "Weekend Afternoons"],
                                      ["value" => "Weekend Nights", "label" => "Weekend Nights"],
                                      ["value" => "Other", "label" => "Other"]
                                  ]
                              ]
                          ]
                      ]
                  ]
              ],
              [
                  "id" => "step-2",
                  "title" => "Disaster Information",
                  "fields" => [
                      [
                          "type" => "checkbox",
                          "name" => "rf_apply[]",
                          "label" => "Disaster Type - Select all that Apply",
                          "options" => [
                              ["value" => "Hurricane", "label" => "Hurricane"],
                              ["value" => "Flooding", "label" => "Flooding"],
                              ["value" => "Earthquake", "label" => "Earthquake"],
                              ["value" => "Landslide", "label" => "Landslide"],
                              ["value" => "Severe Heat", "label" => "Severe Heat"],
                              ["value" => "Snowstorm", "label" => "Snowstorm"],
                              ["value" => "Tornado", "label" => "Tornado"],
                              ["value" => "Fire Emergency", "label" => "Fire Emergency"],
                              ["value" => "Medical Emergency/Mass Casualty", "label" => "Medical Emergency/Mass Casualty"],
                              ["value" => "Missing Persons", "label" => "Missing Persons"],
                              ["value" => "Utility Outage", "label" => "Utility Outage"]
                          ]
                      ]
                  ]
              ]
          ]
      ]
  ];
  

  public function render()
  {
      $this->render_title();
      $this->render_form_box();
  }

  public function render_form_box()
  {
      echo '<h2 class="form-title">Survivor Needs Intake Form</h2>';
  }
}
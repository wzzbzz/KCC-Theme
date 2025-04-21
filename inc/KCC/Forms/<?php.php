<?php
$form_fields = array(
    // Contact Information Section
    'disaster_name' => array(
        'label' => 'Name of Disaster',
        'type' => 'text',
        'required' => true,
        'section' => 'Contact Information'
    ),
    'date_submitted' => array(
        'label' => 'Date Submitted',
        'type' => 'date',
        'required' => true,
        'section' => 'Contact Information'
    ),
    'time_submitted' => array(
        'label' => 'Time Submitted',
        'type' => 'time',
        'required' => true,
        'section' => 'Contact Information'
    ),
    'organization_name' => array(
        'label' => 'Name of Organization',
        'type' => 'text',
        'required' => true,
        'section' => 'Contact Information'
    ),
    'submitter_name' => array(
        'label' => 'Submitted By',
        'type' => 'text',
        'required' => true,
        'readonly' => true,
        'section' => 'Contact Information'
    ),
    'submitter_phone' => array(
        'label' => 'Contact phone',
        'type' => 'number',
        'required' => true,
        'max_length' => 10,
        'section' => 'Contact Information'
    ),
    'submitter_email' => array(
        'label' => 'Contact E-mail',
        'type' => 'text',
        'required' => true,
        'readonly' => true,
        'section' => 'Contact Information'
    ),
    'submitter_supervisor' => array(
        'label' => 'Supervisor Name',
        'type' => 'text',
        'required' => true,
        'section' => 'Contact Information'
    ),
    
    // Report Details Section
    'shift_reported' => array(
        'label' => 'Shift Reported Covers',
        'type' => 'text',
        'required' => true,
        'section' => 'Report Details'
    ),
    'shift_start_date' => array(
        'label' => 'Start Date',
        'type' => 'date',
        'required' => true,
        'section' => 'Report Details'
    ),
    'shift_end_date' => array(
        'label' => 'End Date',
        'type' => 'date',
        'required' => true,
        'section' => 'Report Details'
    ),
    'assignment_title' => array(
        'label' => 'Assignment Title',
        'type' => 'text',
        'required' => true,
        'section' => 'Report Details'
    ),
    'work_address' => array(
        'label' => 'Address where work was conducted',
        'type' => 'text',
        'required' => false,
        'section' => 'Report Details'
    ),
    'team_members' => array(
        'label' => 'Team Members',
        'type' => 'text',
        'required' => true,
        'section' => 'Report Details'
    ),
    
    // Tasks Section
    'tasks' => array(
        'label' => 'Tasks',
        'type' => 'repeater',
        'fields' => array(
            'task' => array(
                'label' => 'Task',
                'type' => 'textarea',
                'required' => true,
            ),
            'task_status' => array(
                'label' => 'Task Status',
                'type' => 'select',
                'options' => array('Completed', 'Incomplete', 'Need Attention'),
                'required' => true,
            ),
        ),
        'min' => 1,
        'max' => 3,
        'section' => 'Tasks'
    ),
    
    // What Worked Section
    'what_worked' => array(
        'label' => 'What Worked',
        'type' => 'repeater',
        'fields' => array(
            'worked_item' => array(
                'label' => 'What worked',
                'type' => 'textarea',
                'required' => true,
            ),
        ),
        'min' => 1,
        'max' => 3,
        'section' => 'What worked'
    ),
    
    // What needs improvement Section
    'what_needs_improvement' => array(
        'label' => 'What Needs Improvement',
        'type' => 'repeater',
        'fields' => array(
            'improvement_item' => array(
                'label' => 'What needs improvement',
                'type' => 'textarea',
                'required' => true,
            ),
        ),
        'min' => 1,
        'max' => 3,
        'section' => 'What needs improvement'
    ),
    
    // Follow-up actions Section
    'follow_up_actions' => array(
        'label' => 'Follow-up Actions',
        'type' => 'repeater',
        'fields' => array(
            'follow_up_action' => array(
                'label' => 'Follow-up Action',
                'type' => 'textarea',
                'required' => true,
            ),
            'taken_by' => array(
                'label' => 'Action will be taken by',
                'type' => 'select',
                'options' => array('My team will complete this action', 'Another team needs to complete this action'),
                'required' => true,
            ),
        ),
        'min' => 1,
        'max' => 3,
        'section' => 'Follow-up actions'
    ),
    
    // Additional information Section
    'supplies_needed' => array(
        'label' => 'Supplies needed to complete the work',
        'type' => 'textarea',
        'required' => true,
        'section' => 'Additional information'
    ),
    'add_info' => array(
        'label' => 'Additional Information',
        'type' => 'textarea',
        'required' => false,
        'section' => 'Additional information'
    ),
    
);
?>
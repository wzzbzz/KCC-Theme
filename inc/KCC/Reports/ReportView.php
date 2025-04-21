<?php

namespace KCC\Reports;


class ReportView
{

    protected $report;

    public function __construct($report)
    {
        $this->report = $report;
    }

    public function render()
    {
        echo "you need to implement render() in your subclass, which is " . str_replace(" ", "", $this->report->report_type()) . "View";
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


    public function render_applications()
    {
        $user_id = get_current_user_id();
        if ($user_id != $this->report->author_id()) {
        ?>
            <td style="width:12%;">
                <?php if ($this->report->user_has_applied($user_id)) { ?>
                    <div class="">
                        <button class="report-btn" type="submit" disabled>
                            <p>Applied</p>
                        </button>
                    </div>
                <?php } elseif ($this->report->user_has_been_declined($user_id)) { ?>
                    <div class="orange-box report-btn rejected_btn">

                        <button type="submit" class="rejected_btn" disabled>
                            <p>Declined</p>
                        </button>

                    </div>

                <?php } elseif ($this->report->user_has_been_approved($user_id)) { ?>
                    <div class=" report-btn approved_btn">
                        <button type="submit" class="approved_btn " disabled>
                            <p>Approved</p>
                        </button>
                    </div>
                <?php } else { ?>
                    <form method='POST' action='' class='row mediadoc_form' id='disaster_media' enctype='multipart/form-data'>
                        <div class='orange-box report-btn'>
                            <input type="hidden" name="action" value="ovr_apply" />
                            <input type='hidden' name='user_id' value='<?= $user_id; ?>'>
                            <input type='hidden' name='report_id' value='<?= $this->report->id(); ?>'>
                            <button type="submit" class="orange-box">
                                <p>Apply</p>
                            </button>
                        </div>
                    </form>
                <?php }
            } else { ?>

            <td>

                <?php if ($this->report->has_applications()) { ?>
                    <a href="<?= $this->report->permalink(); ?>/applications" class="d-block">

                        <div class="orange-box report-btn">

                            <p>View Applications</p>

                        </div>
                    </a>
                <?php } else { ?>
                    <button class="report-btn" type="submit" disabled>
                        <p>No Applications</p>
                    </button>
                <?php
                } ?>
            </td>
<?php }
        }
    }
?>
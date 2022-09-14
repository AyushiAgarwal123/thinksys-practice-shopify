<?php
// Template Name: vp-sales
?>

<?php
get_header(); 
?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>

 

    <!-- job refer modal -->
    <div class="modal fade" id="referfriendjob" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pl-4 bg-blue text-white">
                    <h4 class="modal-title">Refer To Friend</h4>
                </div>
                <div class="modal-body p-4 mb-3">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form
                        action="https://pmzwel2ua0.execute-api.us-east-1.amazonaws.com/refer-friend?returnUrl=https://www.thinksys.com/thank-you"
                        method="post" id="referjobform" class="refer-jobform">
                        <div class="form-group">
                            <label for="referfromemail"> From</label>
                            <input type="text" class="form-control" id="referfromemail" name="refersender"
                                placeholder="Sender Email *">
                        </div>
                        <div class="form-group">
                            <label for="refertoemail"> To</label>
                            <input type="text" class="form-control" id="refertoemail" name="referreceiver"
                                placeholder="Receiver Email *">
                        </div>

                        <button type="submit" id="referSubmit" value="Submit" class="btn buttonDefault"
                            style="display:none;">Submit</button>
                    </form>
                    <div id="jobReferCaptcha"></div>
                    <button type="button" id="referBtn" value="Submit" class="btn buttonDefault">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Apply job modal -->
    <div class="modal fade" id="jobApply" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pl-4 bg-blue text-white">
                    <h4 class="modal-title">Apply Now</h4>
                </div>
                <div class="modal-body p-4 mb-3">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form enctype="multipart/form-data" method="post" id="jobApplyForm" class="refer-jobform">
                        <div class="form-group">
                            <label for="jobApplyName"> Name</label>
                            <input type="text" class="form-control" id="jobApplyName" name="jobApplyName"
                                placeholder="Name*" maxlength="30"
                                onkeyup="this.value=this.value.replace(/[^a-z]/g,' ');">
                            <div class="errorName"></div>
                        </div>
                        <div class="form-group">
                            <label for="jobApplyEmail"> Email</label>
                            <input type="email" class="form-control" id="jobApplyEmail" name="jobApplyEmail"
                                placeholder="Email*">
                            <div class="errorEmail"></div>
                        </div>
                        <div class="form-group">
                            <label class="filelabel">
                                <i class="fa fa-paperclip"></i>
                                <span class="title">
                                    Upload CV
                                </span>
                                <input class="FileUpload1" id="resume" name="file_attach" type="file" />
                            </label>
                            <div class="errorResume"></div>
                        </div>
                        <div id="applyCaptcha"></div>
                        <div class="errorCap"></div>
                        <button type="submit" value="Submit" class="btn buttonDefault" id="jobSubmit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Form Success Popup -->
    <div class="modal fade" id="formregistration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i> Your message has
                        been sent
                    </h4>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer(); 
?>
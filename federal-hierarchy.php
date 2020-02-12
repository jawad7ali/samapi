<?php
include 'FederalHierarchyClass.php';



$oppertunity = new FederalHierarchyClass();



include_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>gsa Gov</title>
    <?php include_once 'includes/header_and_sidebar.php'; ?>
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="">Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ul><!-- /.breadcrumb -->
            </div>

            <div class="page-content" style="overflow-x: auto">
                <table class="table">
                    <thead>
                    <tr>
                        <th >noticeId</th>
                        <th >title</th>
                        <th >solicitationNumber</th>
                        <th >department</th>
                        <th >subTier</th>
                        <th >office</th>
                        <th >postedDate</th>
                        <th >type</th>
                        <th >baseType</th>
                        <th >archiveType</th>
                        <th >archiveDate</th>
                        <th >typeOfSetAsideDescription</th>
                        <th >typeOfSetAside</th>
                        <th >responseDeadLine</th>
                        <th >naicsCode</th>
                        <th >classificationCode</th>
                        <th >active</th>
                        <th >award</th>
                        <th >pointOfContact</th>
                        <th >description</th>
                        <th >organizationType</th>
                        <th >placeOfPerformance</th>
                        <th >additionalInfoLink</th>
                        <th >links</th>
                        <th >uiLink</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($oppertunity->get_data() as $data){ ?>
                        <tr>
                            <td ><?php echo $data->noticeId ?></td>
                            <td ><?php echo $data->title?></td>
                            <td ><?php echo $data->solicitationNumber?></td>
                            <td ><?php echo $data->department?></td>
                            <td ><?php echo $data->subTier?></td>
                            <td ><?php echo $data->office?></td>
                            <td ><?php echo $data->postedDate?></td>
                            <td ><?php echo $data->type?></td>
                            <td ><?php echo $data->baseType?></td>
                            <td ><?php echo $data->archiveType?></td>
                            <td ><?php echo $data->archiveDate?></td>
                            <td ><?php echo $data->typeOfSetAsideDescription?></td>
                            <td ><?php echo $data->typeOfSetAside?></td>
                            <td ><?php echo $data->responseDeadLine?></td>
                            <td ><?php echo $data->naicsCode?></td>
                            <td ><?php echo $data->classificationCode?></td>
                            <td ><?php echo $data->active?></td>
                            <td ><?php echo $data->award?></td>
                            <td ><?php echo $data->pointOfContact?></td>
                            <td ><?php echo $data->description?></td>
                            <td ><?php echo $data->organizationType?></td>
                            <td ><?php echo $data->placeOfPerformance?></td>
                            <td ><?php echo $data->additionalInfoLink?></td>
                            <td ><?php echo $data->links ?></td>
                            <td ><?php echo $data->uiLink ?></td>
                        </tr>
                    <?php } ?>

                    </tbody>

                </table>

            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <?php include_once 'includes/footer.php'; ?>

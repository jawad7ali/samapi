<?php


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
                        <th scope="col">noticeId</th>
                        <th scope="col">title</th>
                        <th scope="col">solicitationNumber</th>
                        <th scope="col">department</th>
                        <th scope="col">subTier</th>
                        <th scope="col">office</th>
                        <th scope="col">postedDate</th>
                        <th scope="col">type</th>
                        <th scope="col">baseType</th>
                        <th scope="col">archiveType</th>
                        <th scope="col">archiveDate</th>
                        <th scope="col">typeOfSetAsideDescription</th>
                        <th scope="col">typeOfSetAside</th>
                        <th scope="col">responseDeadLine</th>
                        <th scope="col">naicsCode</th>
                        <th scope="col">classificationCode</th>
                        <th scope="col">active</th>
                        <th scope="col">award</th>
                        <th scope="col">pointOfContact</th>
                        <th scope="col">description</th>
                        <th scope="col">organizationType</th>
                        <th scope="col">placeOfPerformance</th>
                        <th scope="col">additionalInfoLink</th>
                        <th scope="col">links</th>
                        <th scope="col">uiLink</th>





                    </tr>
                    </thead>
                    <tbody>
                    </tbody>

                </table>

            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <?php include_once 'includes/footer.php'; ?>

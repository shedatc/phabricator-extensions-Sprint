<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 *
 * @generated
 * @phutil-library-version 2
 */
phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' => array(
    'AutoLoader' => 'tests/Autoloader.php',
    'BoardDataPieView' => 'view/burndown/BoardDataPieView.php',
    'BoardDataProvider' => 'storage/BoardDataProvider.php',
    'BoardDataTableView' => 'view/burndown/BoardDataTableView.php',
    'BurndownChartView' => 'view/burndown/BurndownChartView.php',
    'BurndownDataDate' => 'util/BurndownDataDate.php',
    'CeleritySprintResources' => 'celerity/CeleritySprintResources.php',
    'DateIterator' => 'tests/DateIterator.php',
    'EventTableView' => 'view/burndown/EventTableView.php',
    'OpenTasksView' => 'view/reports/OpenTasksView.php',
    'PhragileProfilePanel' => 'profilepanel/PhragileProfilePanel.php',
    'ProjectOpenTasksView' => 'view/reports/ProjectOpenTasksView.php',
    'SprintApplication' => 'application/SprintApplication.php',
    'SprintApplicationTest' => 'tests/SprintApplicationTest.php',
    'SprintBeginDateField' => 'customfield/SprintBeginDateField.php',
    'SprintColumnTransaction' => 'storage/SprintColumnTransaction.php',
    'SprintConduitAPIMethod' => 'conduit/SprintConduitAPIMethod.php',
    'SprintConfigOptions' => 'config/SprintConfigOptions.php',
    'SprintConstants' => 'constants/SprintConstants.php',
    'SprintController' => 'controller/SprintController.php',
    'SprintControllerTest' => 'tests/SprintControllerTest.php',
    'SprintCreateConduitAPIMethod' => 'conduit/SprintCreateConduitAPIMethod.php',
    'SprintCustomFieldTest' => 'tests/SprintCustomFieldTest.php',
    'SprintDAO' => 'storage/SprintDAO.php',
    'SprintDataView' => 'view/burndown/SprintDataView.php',
    'SprintDataViewController' => 'controller/SprintDataViewController.php',
    'SprintDefaultViewCapability' => 'capability/SprintDefaultViewCapability.php',
    'SprintEndDateField' => 'customfield/SprintEndDateField.php',
    'SprintException' => 'exception/SprintException.php',
    'SprintGetIsSprintConduitAPIMethod' => 'conduit/SprintGetIsSprintConduitAPIMethod.php',
    'SprintGetStartEndDatesConduitAPIMethod' => 'conduit/SprintGetStartEndDatesConduitAPIMethod.php',
    'SprintGetTaskProjectHistoryConduitAPIMethod' => 'conduit/SprintGetTaskProjectHistoryConduitAPIMethod.php',
    'SprintHandleIconView' => 'view/SprintHandleIconView.php',
    'SprintHistoryController' => 'controller/SprintHistoryController.php',
    'SprintHistoryDataProvider' => 'storage/SprintHistoryDataProvider.php',
    'SprintHistoryTableView' => 'view/reports/SprintHistoryTableView.php',
    'SprintInfoConduitAPIMethod' => 'conduit/SprintInfoConduitAPIMethod.php',
    'SprintIsSprintField' => 'customfield/SprintIsSprintField.php',
    'SprintListController' => 'controller/SprintListController.php',
    'SprintListDataProvider' => 'storage/SprintListDataProvider.php',
    'SprintListTableView' => 'view/SprintListTableView.php',
    'SprintManiphestConduitAPIMethod' => 'conduit/SprintManiphestConduitAPIMethod.php',
    'SprintManiphestQueryConduitAPIMethod' => 'conduit/SprintManiphestQueryConduitAPIMethod.php',
    'SprintPoints' => 'util/SprintPoints.php',
    'SprintProjectController' => 'controller/SprintProjectController.php',
    'SprintProjectCustomField' => 'customfield/SprintProjectCustomField.php',
    'SprintProjectProfileController' => 'controller/SprintProjectProfileController.php',
    'SprintProjectProfilePanel' => 'profilepanel/SprintProjectProfilePanel.php',
    'SprintProjectProfilePanelEngine' => 'engine/SprintProjectProfilePanelEngine.php',
    'SprintProjectViewController' => 'controller/SprintProjectViewController.php',
    'SprintQuery' => 'query/SprintQuery.php',
    'SprintQueryTest' => 'tests/SprintQueryTest.php',
    'SprintReportBurnUpView' => 'view/reports/SprintReportBurnUpView.php',
    'SprintReportController' => 'controller/SprintReportController.php',
    'SprintReportOpenTasksView' => 'view/reports/SprintReportOpenTasksView.php',
    'SprintSetIsSprintConduitAPIMethod' => 'conduit/SprintSetIsSprintConduitAPIMethod.php',
    'SprintSetStartEndDatesConduitAPIMethod' => 'conduit/SprintSetStartEndDatesConduitAPIMethod.php',
    'SprintStats' => 'storage/SprintStats.php',
    'SprintStatsTest' => 'tests/SprintStatsTest.php',
    'SprintTableView' => 'view/SprintTableView.php',
    'SprintTestCase' => 'tests/SprintTestCase.php',
    'SprintUIObjectBoxView' => 'view/SprintUIObjectBoxView.php',
    'SprintValidator' => 'util/SprintValidator.php',
    'SprintView' => 'view/SprintView.php',
    'TaskTableDataProvider' => 'storage/TaskTableDataProvider.php',
    'TasksTableView' => 'view/burndown/TasksTableView.php',
    'UserOpenTasksView' => 'view/reports/UserOpenTasksView.php',
  ),
  'function' => array(),
  'xmap' => array(
    'BoardDataPieView' => 'Phobject',
    'BoardDataTableView' => 'Phobject',
    'BurndownChartView' => 'Phobject',
    'BurndownDataDate' => 'Phobject',
    'CeleritySprintResources' => 'CelerityResourcesOnDisk',
    'DateIterator' => 'Iterator',
    'EventTableView' => 'Phobject',
    'PhragileProfilePanel' => 'PhabricatorProfilePanel',
    'ProjectOpenTasksView' => 'OpenTasksView',
    'SprintApplication' => 'PhabricatorApplication',
    'SprintApplicationTest' => 'SprintTestCase',
    'SprintBeginDateField' => 'SprintProjectCustomField',
    'SprintConduitAPIMethod' => 'ConduitAPIMethod',
    'SprintConfigOptions' => 'PhabricatorApplicationConfigOptions',
    'SprintController' => 'PhabricatorController',
    'SprintControllerTest' => 'SprintTestCase',
    'SprintCreateConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintCustomFieldTest' => 'SprintTestCase',
    'SprintDAO' => 'PhabricatorLiskDAO',
    'SprintDataView' => 'SprintView',
    'SprintDataViewController' => 'SprintController',
    'SprintDefaultViewCapability' => 'PhabricatorPolicyCapability',
    'SprintEndDateField' => 'SprintProjectCustomField',
    'SprintException' => 'AphrontException',
    'SprintGetIsSprintConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintGetStartEndDatesConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintGetTaskProjectHistoryConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintHandleIconView' => 'AphrontTagView',
    'SprintHistoryController' => 'SprintController',
    'SprintHistoryTableView' => 'SprintView',
    'SprintInfoConduitAPIMethod' => 'SprintManiphestConduitAPIMethod',
    'SprintIsSprintField' => 'SprintProjectCustomField',
    'SprintListController' => 'SprintController',
    'SprintListTableView' => 'Phobject',
    'SprintManiphestConduitAPIMethod' => 'ConduitAPIMethod',
    'SprintManiphestQueryConduitAPIMethod' => 'SprintManiphestConduitAPIMethod',
    'SprintPoints' => 'Phobject',
    'SprintProjectController' => 'SprintController',
    'SprintProjectCustomField' => array(
      'PhabricatorProjectCustomField',
      'PhabricatorStandardCustomFieldInterface',
    ),
    'SprintProjectProfileController' => 'SprintProjectController',
    'SprintProjectProfilePanel' => 'PhabricatorProfilePanel',
    'SprintProjectProfilePanelEngine' => 'PhabricatorProfileMenuEngine',
    'SprintProjectViewController' => 'SprintController',
    'SprintQuery' => 'SprintDAO',
    'SprintQueryTest' => 'SprintTestCase',
    'SprintReportBurnUpView' => 'SprintView',
    'SprintReportController' => 'SprintController',
    'SprintReportOpenTasksView' => 'SprintView',
    'SprintSetIsSprintConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintSetStartEndDatesConduitAPIMethod' => 'SprintConduitAPIMethod',
    'SprintStatsTest' => 'SprintTestCase',
    'SprintTableView' => 'AphrontView',
    'SprintTestCase' => 'PHPUnit_Framework_TestCase',
    'SprintUIObjectBoxView' => 'AphrontView',
    'SprintValidator' => 'Phobject',
    'SprintView' => 'AphrontView',
    'TasksTableView' => 'Phobject',
    'UserOpenTasksView' => 'OpenTasksView',
  ),
));

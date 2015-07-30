<?php
/**
 * The testcase module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv11.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     testcase
 * @version     $Id: en.php 4966 2013-07-02 02:59:25Z wyd621@gmail.com $
 * @link        http://www.zentao.net
 */
$lang->testcase->id               = 'ID';
$lang->testcase->product          = $lang->productCommon;
$lang->testcase->module           = 'Module';
$lang->testcase->story            = 'Story';
$lang->testcase->storyVersion     = 'Story version';
$lang->testcase->title            = 'Title';
$lang->testcase->precondition     = 'precondition';
$lang->testcase->pri              = 'Priority';
$lang->testcase->type             = 'Type';
$lang->testcase->status           = 'Status';
$lang->testcase->steps            = 'Steps';
$lang->testcase->frequency        = 'Frequency';
$lang->testcase->order            = 'Order';
$lang->testcase->openedBy         = 'Opened by ';
$lang->testcase->openedDate       = 'Opened date';
$lang->testcase->lastEditedBy     = 'Last edited by';
$lang->testcase->lastEditedDate   = 'Last edited date';
$lang->testcase->version          = 'Version';
$lang->testcase->result           = 'Result';
$lang->testcase->lastRunResult    = 'Result';
$lang->testcase->real             = 'Real';
$lang->testcase->keywords         = 'Keywords';
$lang->testcase->files            = 'Files';
$lang->testcase->howRun           = 'How run';
$lang->testcase->scriptedBy       = 'Scripted by';
$lang->testcase->scriptedDate     = 'Scripted date';
$lang->testcase->scriptedStatus   = 'Scripted status';
$lang->testcase->scriptedLocation = 'Script location';
$lang->testcase->linkCase         = 'Related cases';
$lang->testcase->stage            = 'Stage';
$lang->testcase->lastEditedByAB   = 'Last edited by';
$lang->testcase->lastEditedDateAB = 'Last edited date';
$lang->testcase->allProduct       = "All {$lang->productCommon}";
$lang->testcase->fromBug          = 'From bug';
$lang->testcase->toBug            = 'To bug';
$lang->testcase->changed          = 'Changed';
$lang->testcase->createBug        = 'Transform bug';
$lang->case = $lang->testcase;  // For dao checking using. Because 'case' is a php keywords, so the module name is testcase, table name is still case.

$lang->testcase->stepID     = 'ID';
$lang->testcase->stepDesc   = 'Step';
$lang->testcase->stepExpect = 'Expect';

$lang->testcase->common             = 'Case';
$lang->testcase->index              = "Index";
$lang->testcase->create             = "Create case";
$lang->testcase->batchCreate        = "Batch create";
$lang->testcase->delete             = "Delete";
$lang->testcase->view               = "Info";
$lang->testcase->edit               = "Edit";
$lang->testcase->batchEdit          = "Batch edit";
$lang->testcase->delete             = "Delete";
$lang->testcase->batchDelete        = "Batch delete ";
$lang->testcase->deleted            = "Deleted";
$lang->testcase->browse             = "Browse";
$lang->testcase->groupCase          = "View case by group";
$lang->testcase->import             = "Import";
$lang->testcase->importID           = "Linenum";
$lang->testcase->showImport         = "Show import";
$lang->testcase->exportTemplet      = "Export templet";
$lang->testcase->export             = "Export data";
$lang->testcase->confirmChange      = 'Confirm case change';
$lang->testcase->confirmStoryChange = 'Confirm story change';

$lang->testcase->new = 'New';
  
$lang->testcase->num = 'The number of cases';

$lang->testcase->deleteStep   = 'Delete';
$lang->testcase->insertBefore = 'Insert before';
$lang->testcase->insertAfter  = 'Insert after';

$lang->testcase->selectProduct = "Select {$lang->productCommon}";
$lang->testcase->byModule      = 'By module';
$lang->testcase->assignToMe    = 'Cases to me';
$lang->testcase->openedByMe    = 'My Opened cases';
$lang->testcase->allCases      = 'All case';
$lang->testcase->needConfirm   = 'Story changed';
$lang->testcase->moduleCases   = 'By module';
$lang->testcase->bySearch      = 'By search';
$lang->testcase->doneByMe      = 'My runed cases';

$lang->testcase->lblProductAndModule         = "{$lang->productCommon} & module";
$lang->testcase->lblTypeAndPri               = 'Type & priority';
$lang->testcase->lblSystemBrowserAndHardware = 'OS & browser';
$lang->testcase->lblAssignAndMail            = 'Assigned & mailto';
$lang->testcase->lblStory                    = 'Story';
$lang->testcase->lblLastEdited               = 'Last edited';

$lang->testcase->legendRelated      = 'Related info';
$lang->testcase->legendBasicInfo    = 'Basic info';
$lang->testcase->legendMailto       = 'Mailto';
$lang->testcase->legendAttatch      = 'Files';
$lang->testcase->legendLinkBugs     = 'Bug';
$lang->testcase->legendOpenAndEdit  = 'Open & edit';
$lang->testcase->legendStoryAndTask = 'Story';
$lang->testcase->legendCases        = 'Related cases';
$lang->testcase->legendSteps        = 'Steps';
$lang->testcase->legendAction       = 'Action';
$lang->testcase->legendHistory      = 'History';
$lang->testcase->legendComment      = 'Comment';
$lang->testcase->legendProduct      = "{$lang->productCommon} & module";

$lang->testcase->confirmDelete      = 'Are you sure to delete this case?';
$lang->testcase->confirmBatchDelete = 'Are you sure to batch delete there cases?';
$lang->testcase->same               = 'Ditto';

$lang->testcase->priList[3] = 3;
$lang->testcase->priList[1] = 1;
$lang->testcase->priList[2] = 2;
$lang->testcase->priList[4] = 4;

/* Define the types. */
$lang->testcase->typeList['']            = '';
$lang->testcase->typeList['feature']     = 'Feature';
$lang->testcase->typeList['performance'] = 'Performance';
$lang->testcase->typeList['config']      = 'Config';
$lang->testcase->typeList['install']     = 'Install';
$lang->testcase->typeList['security']    = 'Security';
$lang->testcase->typeList['interface']   = 'Interface';
$lang->testcase->typeList['other']       = 'Other';

$lang->testcase->stageList['']            = '';
$lang->testcase->stageList['unittest']    = 'Unit testing';
$lang->testcase->stageList['feature']     = 'Feature testing';
$lang->testcase->stageList['intergrate']  = 'Integrate testing';
$lang->testcase->stageList['system']      = 'System testing';
$lang->testcase->stageList['smoke']       = 'Smoking testing';
$lang->testcase->stageList['bvt']         = 'BVT testing';

$lang->testcase->groups['']      = 'Group view';
$lang->testcase->groups['story'] = 'Group by story';

$lang->testcase->statusList['']            = '';
$lang->testcase->statusList['normal']      = 'Normal';
$lang->testcase->statusList['blocked']     = 'Blocked';
$lang->testcase->statusList['investigate'] = 'Investigate';

$lang->testcase->resultList['n/a']     = 'N/A';
$lang->testcase->resultList['pass']    = 'Pass';
$lang->testcase->resultList['fail']    = 'Fail';
$lang->testcase->resultList['blocked'] = 'Blocked';

$lang->testcase->buttonEdit   = 'Edit';
$lang->testcase->buttonToList = 'Back';

$lang->testcase->errorEncode = 'No data, please select right encode and upload again!';
$lang->testcase->noFunction  = 'Iconv and mb_convert_encoding does not exist, you can not turn the data into the desired coding!';
$lang->testcase->noRequire   = "In the row of %s, the %s is a required field";

$lang->testcase->searchStories = 'Type to search stories';

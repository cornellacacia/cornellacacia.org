<?php
/* $Id: arabic-windows-1256.inc.php,v 2.53 2004/12/28 16:34:45 nijel Exp $ */

/**
 * Original translation to Arabic by Fisal <fisal77 at hotmail.com>
 * Update by Tarik kallida <kallida at caramail.com>
 * Final Update on November 25, 2003 by Ossama Khayat <okhayat at yahoo.com>
 */

$charset = 'windows-1256';
$text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'Tahoma, verdana, arial, helvetica, sans-serif';
$right_font_family = '"Windows UI", Tahoma, verdana, arial, helvetica, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('����', '��������', '��������', '��������');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('�����', '�������', '��������', '��������', '������', '������', '�����');
$month = array('�����', '������', '����', '�����', '����', '�����', '�����', '�����', '������', '������', '������', '������');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y ������ %H:%M';

$timespanfmt = '%s ��� %s ���ɡ %s ����� �%s �����';

$strAPrimaryKey = '��� ����� ������� ������� �� %s';
$strAbortedClients = '����';
$strAbsolutePathToDocSqlDir = '������ ����� ������ ������ ��� ���� ������ ��� ���� docSQL';
$strAccessDenied = '��� �����';
$strAccessDeniedExplanation = '���� phpMyAdmin ������� ����� MySQL� ���� ������ �������. ���� �� ����� �� �������ݡ �� ��� �������� ����� ������ �� ��� ������� config.inc.php ������ ���� ������ ��������� ������� ���� �� ��� ������� �� ���� MySQL.';
$strAction = '�������';
$strAddAutoIncrement = '��� ���� AUTO_INCREMENT';
$strAddConstraints = '��� ������';
$strAddDeleteColumn = '�����/��� ���� ���';
$strAddDeleteRow = '�����/��� �� ���';
$strAddDropDatabase = '��� �� ���� ����� ������';
$strAddIntoComments = '��� ��� ���������';
$strAddNewField = '����� ��� ����';
$strAddPrivilegesOnDb = '����� ��������� ��� ����� �������� �������';
$strAddPrivilegesOnTbl = '����� ��������� ��� ������ ������';
$strAddSearchConditions = '��� ���� ����� (��� �� ������ "where" clause):';
$strAddToIndex = '����� ����� &nbsp;%s&nbsp;��(���)';
$strAddUser = '��� ������ ����';
$strAddUserMessage = '��� ���� ������ ����.';
$strAddedColumnComment = '�� ����� ������� ������';
$strAddedColumnRelation = '�� ����� ������� ������';
$strAdministration = '�����';
$strAffectedRows = '���� �����:';
$strAfter = '��� %s';
$strAfterInsertBack = '������ ��� ������ �������';
$strAfterInsertNewInsert = '����� ����� ����';
$strAll = '����';
$strAllTableSameWidth = '���� �� ������� ���� ����ֿ';
$strAlterOrderBy = '����� ����� ������ ��';
$strAnIndex = '��� ����� ������ �� %s';
$strAnalyzeTable = '����� ������';
$strAnd = '�';
$strAny = '��';
$strAnyHost = '�� ����';
$strAnyUser = '�� ������';
$strArabic = '�������';
$strArmenian = '��������';
$strAscending = '��������';
$strAtBeginningOfTable = '�� ����� ������';
$strAtEndOfTable = '�� ����� ������';
$strAttr = '������';
$strAutodetect = '������ ��������';
$strAutomaticLayout = '���� ������';

$strBack = '����';
$strBaltic = '�������';
$strBeginCut = '��� �����';
$strBeginRaw = '��� ������ ������';
$strBinary = '�����';
$strBinaryDoNotEdit = '����� - �������';
$strBookmarkAllUsers = '���� ��� ���������� ������ ��� ��� ������� ��������';
$strBookmarkDeleted = '��� ����� ������� ��������.';
$strBookmarkLabel = '�����';
$strBookmarkOptions = '������ ��������';
$strBookmarkQuery = '����� ������ SQL-�������';
$strBookmarkThis = '���� ����� ������ SQL-�������';
$strBookmarkView = '��� ���';
$strBrowse = '�������';
$strBrowseForeignValues = '������ ����� �������';
$strBulgarian = '���������';
$strBzError = '�� ����� phpMyAdmin ��� ��� �������� ���� ��� �� ������ Bz2 �� ����� PHP. ������ �� ����� ���� ����� <code>$cfg[\'BZipDump\']</code> �� ��� ������� phpMyAdmin ��� <code>FALSE</code>. �� ��� ���� ������� ����� ��� Bz2� ���� �������� ��� ����� ���� �� PHP. ����� �� �������� ���� �� ����� ��� PHP %s.';
$strBzip = '"bzipped"';

$strCSVOptions = '������ ����� �������� ������ )CSV(';
$strCannotLogin = '�� ���� ������ ��� ���� MySQL';
$strCantLoad = '�� ���� ����� �������� %s�<br />���� ���� �� ������� PHP.';
$strCantLoadRecodeIconv = '�� ���� ����� iconv �� ����� ����� �������� ������� ������ ����� �����ݡ ������ ����� PHP ����� �������� ��� ���������� �� ��� ��� ������� �� phpMyAdmin.';
$strCantRenameIdxToPrimary = '������ ����� ��� ������ ��� �������!';
$strCantUseRecodeIconv = '�� ���� ������� iconv ��� libiconv ��� ����� recode_string �� ��� ���� �������� ��� �����. ����� �� ������� PHP.';
$strCardinality = 'Cardinality';
$strCarriage = '����� �������: \\r';
$strCaseInsensitive = '��� ���� ����� ������';
$strCaseSensitive = '���� ����� ������';
$strCentralEuropean = '������ ������';
$strChange = '�����';
$strChangeCopyMode = '��� ��� ������ ���� ���� ��������� �...';
$strChangeCopyModeCopy = ' ... ��� ������.';
$strChangeCopyModeDeleteAndReload = ' ... ���� �������� �� ����� ���������� ���� ����� ��������� ��� ���.';
$strChangeCopyModeJustDelete = ' ... ���� ������ �� ����� ����������.';
$strChangeCopyModeRevoke = ' ... ����� �� ��������� ������� �� �������� ������ ��� ���.';
$strChangeCopyUser = '���� ������� ������ / ���� ��� ������';
$strChangeDisplay = '���� ����� �������';
$strChangePassword = '����� ���� ����';
$strCharset = '������ �������';
$strCharsetOfFile = '����� ���� �����:';
$strCharsets = '������� �������';
$strCharsetsAndCollations = '������� ������� �Collations';
$strCheckAll = '���� ����';
$strCheckOverhead = '���� �� overheaded';
$strCheckPrivs = '���� �� ���������';
$strCheckPrivsLong = '���� �� ��������� ������ ������ &quot;%s&quot;.';
$strCheckTable = '������ �� ������';
$strChoosePage = '����� ���� ���� ��������';
$strColComFeat = '����� ������� ������';
$strCollation = 'Collation';
$strColumnNames = '��� ������';
$strColumnPrivileges = '������� ���� ������';
$strCommand = '����';
$strComments = '�������';
$strCompleteInserts = '������� ��� �����';
$strCompression = '�����';
$strConfigFileError = '�� ����� phpMyAdmin �� ���� ��� ��������!<br />�� ���� ��� ���� �� PHP ��� ��� �� ������� ��� �� ��� �� ������ �� ��� �����.<br />����� ���� ����� ���� ����� �������� ������ ����� ����� ����� ����� �������. �� ���� ������� �� ���� ����� ������� �� ����� ������� �������� ����� �� ���� ��.<br />�� ���� ��� ���� ����ɡ ���� ��� ��� �� ����.';
$strConfigureTableCoord = '���� ����� ������ ������ %s';
$strConnections = '�������';
$strConstraintsForDumped = '���� ������� ��������';
$strConstraintsForTable = '������ ������';
$strCookiesRequired = '��� ����� ��� ������� �� ��� �������.';
$strCopyTable = '��� ������ ���';
$strCopyTableOK = '������ %s ��� �� ���� ��� %s.';
$strCopyTableSameNames = '�� ���� ��� ������ ��� ����!';
$strCouldNotKill = '�� ����� phpMyAdmin ����� �������� %s. ���� ���� ����� ������.';
$strCreate = '�����';
$strCreateIndex = '����� ����� ���&nbsp;%s&nbsp;����';
$strCreateIndexTopic = '����� ����� �����';
$strCreateNewDatabase = '����� ����� ������ �����';
$strCreateNewTable = '����� ���� ���� �� ����� �������� %s';
$strCreatePage = '���� ���� �����';
$strCreatePdfFeat = '����� ����� PDF';
$strCreationDates = '������ �������/�������/�������';
$strCriteria = '��������';
$strCroatian = '���������';
$strCyrillic = '���������';
$strCzech = '��������';

$strDBComment = '������ ����� ��������: ';
$strDBGContext = '������';
$strDBGContextID = '��� ������';
$strDBGHits = '���������';
$strDBGLine = '���';
$strDBGMaxTimeMs = '���� ��ʡ ��';
$strDBGMinTimeMs = '��� ��ʡ ��';
$strDBGModule = '������';
$strDBGTimePerHitMs = '���/������� ��';
$strDBGTotalTimeMs = '����� ������ ��';
$strDanish = '���������';
$strData = '������';
$strDataDict = '����� ��������';
$strDataOnly = '������ ���';
$strDatabase = '����� ��������';
$strDatabaseExportOptions = '������ ����� ����� ������';
$strDatabaseHasBeenDropped = '����� ������ %s ������.';
$strDatabaseNoTable = '�� ����� ����� �������� ��� ��� �����!';
$strDatabases = '����� ������';
$strDatabasesDropped = '�� ��� ����� �������� %s �����.';
$strDatabasesStats = '�������� ����� ��������';
$strDatabasesStatsDisable = '���� ����������';
$strDatabasesStatsEnable = '���� ����������';
$strDatabasesStatsHeavyTraffic = '������: ����� �������� ����� �������� ��� �� ���� ���� ������ ���� ��� ���� ���� ����� MySQL.';
$strDbPrivileges = '������� ���� ������ ��������';
$strDbSpecific = '��� ������ ������';
$strDefault = '�������';
$strDefaultValueHelp = '����� ���������ɡ ������ ���� ���� ����ɡ ��� ������ ���� �� ����ա �������� �������: a';
$strDelOld = '����� ������ ������� ����� ������ �� ��� ������. �� ��� ��� ��� ������ڿ';
$strDelayedInserts = '������ �������� ��������';
$strDelete = '���';
$strDeleteAndFlush = '���� ���������� ��� ������ ����� ��������� ��� ���.';
$strDeleteAndFlushDescr = '��� �� ���� ����ɡ ��� ����� ����� ��������� �� ������ ��� �����.';
$strDeleted = '��� �� ��� ����';
$strDeletedRows = '������ ��������:';
$strDeleting = '���� ���� %s';
$strDescending = '��������';
$strDescription = '�����';
$strDictionary = '�����';
$strDisabled = '�����';
$strDisplayFeat = '����� �������';
$strDisplayOrder = '����� �����:';
$strDisplayPDF = '����� ���� ��� PDF';
$strDoAQuery = '���� "������� ������ ������" (wildcard: "%")';
$strDoYouReally = '�� ���� ���� �����';
$strDocu = '������� �������';
$strDrop = '���';
$strDropSelectedDatabases = '���� ����� �������� �������';
$strDropUsersDb = '���� ����� �������� ���� ��� ��� ����� ����������.';
$strDumpSaved = '�� ��� ���Dump ��� ����� %s.';
$strDumpXRows = '���� %s ��� ���� �� ����� %s.';
$strDumpingData = '����� �� ������� ������ ������';
$strDynamic = '��������';

$strEdit = '�����';
$strEditPDFPages = '���� ����� PDF';
$strEditPrivileges = '����� ����������';
$strEffective = '����';
$strEmpty = '����� �����';
$strEmptyResultSet = 'MySQL ��� ������ ����� ����� ����� (�����. �� ����).';
$strEnabled = '�����';
$strEnd = '�����';
$strEndCut = '������ �����';
$strEndRaw = '������ �������� �������';
$strEnglish = '����������';
$strEnglishPrivileges = ' ������: ��� �������� ��MySQL ���� ������ ������ ���������� ��� ';
$strError = '���';
$strEstonian = '���������';
$strExcelEdition = '������ ����';
$strExcelOptions = '������ ����';
$strExecuteBookmarked = '���� ������� ����� ������ ������';
$strExplain = '���� SQL';
$strExport = '�����';
$strExtendedInserts = '����� ����';
$strExtra = '�����';

$strFailedAttempts = '������� �����';
$strField = '�����';
$strFieldHasBeenDropped = '��� ����� %s';
$strFields = ' ��� ������';
$strFieldsEmpty = ' ����� ����� ����! ';
$strFieldsEnclosedBy = '��� ���� ��';
$strFieldsEscapedBy = '��� ������� ��';
$strFieldsTerminatedBy = '��� ����� ��';
$strFileAlreadyExists = '���� %s ����� ����� ��� ������. ��� ����� �� ��� ���� ������� ��� ����� �������.';
$strFileCouldNotBeRead = '�� ���� ����� �����';
$strFileNameTemplate = '���� ��� �����';
$strFileNameTemplateHelp = '������ __DB__ ���� ����� �������ʡ __TABLE__ ���� ������ � %sany strftime%s ������� ����� ����ʡ ���� ��� ����� ��������. ��� ��� �������� ��� �� ���.';
$strFileNameTemplateRemember = '���� ������';
$strFixed = '����';
$strFlushPrivilegesNote = '������: ���� phpMyAdmin ������� ���������� �� ����� ��������� �� ���� MySQL �������. ������� ��� ������� �� ����� �� ��������� ���� �������� ������ ��� �� ��� ������� ����� �������. �� ��� �����ɡ ���� %s ������ ����� ��������� %s ��� �� ����.';
$strFlushTable = '����� ����� ������ ("FLUSH")';
$strFormEmpty = '���� ���� ������ �������� !';
$strFormat = '����';
$strFullText = '���� �����';
$strFunction = '����';

$strGenBy = '���� ������';
$strGenTime = '���� ��';
$strGeneralRelationFeat = '������� ������� ������';
$strGerman = '���������';
$strGlobal = '����';
$strGlobalPrivileges = '�������� �����';
$strGlobalValue = '���� �����';
$strGo = '&nbsp;�������&nbsp;';
$strGrantOption = '������';
$strGreek = '���������';
$strGzip = '"gzipped"';

$strHasBeenAltered = '��� �����.';
$strHasBeenCreated = '��� ����.';
$strHaveToShow = '���� ������ ���� ���� ��� ����� �����';
$strHebrew = '�������';
$strHome = '������ ��������';
$strHomepageOfficial = '������ �������� ������� �� phpMyAdmin';
$strHost = '������';
$strHostEmpty = '��� �������� ����!';
$strHungarian = '���������';

$strId = '���';
$strIdxFulltext = '���� ������';
$strIfYouWish = '��� ��� ���� �� �� ���� ��� ����� ������ ���, ��� �������� ���� ���� ����� �����.';
$strIgnore = '�����';
$strIgnoringFile = '����� ����� %s';
$strImportDocSQL = '������� ����� docSQL';
$strImportFiles = '������ �������';
$strImportFinished = '����� ���������';
$strInUse = '��� ���������';
$strIndex = '�����';
$strIndexHasBeenDropped = '����� ������ %s';
$strIndexName = '��� ������&nbsp;:';
$strIndexType = '��� ������&nbsp;:';
$strIndexes = '�����';
$strInnodbStat = '��� InnoDB';
$strInsecureMySQL = '����� ��� �������� ����� �� ������� )�������� root ��� ���� ����( ����� ���� ��� ���� �������� ������� ��MySQL. ���� MySQL ���� ���� ���� �������� ���������� ���� ���� �������� ����� �� ���� ������ ���� ������ ��� �� ���� ��� ����.';
$strInsert = '�����';
$strInsertAsNewRow = '����� ������ ����';
$strInsertNewRow = '����� ����� ����';
$strInsertTextfiles = '����� ��� ��� �� ������';
$strInsertedRowId = '��� ����� ������ ������:';
$strInsertedRows = '���� �����:';
$strInstructions = '�������';
$strInternalNotNecessary = '* ������� �������� ��� ������ ����� ���� ������ ������ �� InnoDB.';
$strInternalRelations = '�������� ��������';

$strJapanese = '���������';
$strJumpToDB = '���� ��� ����� ������ &quot;%s&quot;.';
$strJustDelete = '��� �� ���� ���������� �� ���� ���������.';
$strJustDeleteDescr = '��� ���� ���������� &quot;���������&quot; ������ ��� ������ ������ ������� ��� ��� ����� ����� ���������.';

$strKeepPass = '������ ���� ����';
$strKeyname = '��� �������';
$strKill = '�����';
$strKorean = '�������';

$strLaTeX = '��������';
$strLaTeXOptions = '������ �����';
$strLandscape = '��� ������';
$strLatexCaption = '����� ������';
$strLatexContent = '�������� ������ __TABLE__';
$strLatexContinued = '(����)';
$strLatexContinuedCaption = '����� ���� ����';
$strLatexIncludeCaption = '��� ������� ������';
$strLatexLabel = 'Label key';
$strLatexStructure = '���� ������ __TABLE__';
$strLengthSet = '�����/������*';
$strLimitNumRows = '��� ������� ��� ����';
$strLineFeed = '���� �����: \\n';
$strLinesTerminatedBy = '���� ������ ��';
$strLinkNotFound = '�� ���� ����� ������';
$strLinksTo = '����� ��';
$strLithuanian = '����������';
$strLoadExplanation = '���� ����� ����� ���� �������� ��� ��� ����� ������� �� �� ����.';
$strLoadMethod = '���� LOAD';
$strLocalhost = '����';
$strLocationTextfile = '���� ��� ���';
$strLogPassword = '���� ����:';
$strLogServer = '���� ������';
$strLogUsername = '��� ���������:';
$strLogin = '����';
$strLoginInformation = '������ ������';
$strLogout = '����� ����';

$strMIME_MIMEtype = '��� MIME';
$strMIME_available_mime = '����� MIME ��������';
$strMIME_available_transform = '��������� ��������';
$strMIME_description = '�����';
$strMIME_nodescription = '��� ���� ��� ����� ���� �������.<br />���� ���� �����ѡ �� ����� %s.';
$strMIME_transformation = '����� �������';
$strMIME_transformation_note = '���� ����� ������� ������� �������� ������ ������� MIME ������ ��ǡ ���� ��� %s������ �������%s';
$strMIME_transformation_options = '������ �������';
$strMIME_transformation_options_note = '����� ���� ����� ������� ������� �������� ��� �������: \'a\',\'b\',\'c\'...<br />��� ����� �� ��� ����� ����� ("\") �� ����� ����� ("\'") ��� ��� ����� ������ ������ ����� )��� ���� ������ \'\\\\xyz\' �� \'a\\\'b\'(.';
$strMIME_without = '����� MIME ���� ���� ����� ����� ��� ��� ����� ����� ������';
$strModifications = '��� ���������';
$strModify = '�����';
$strModifyIndexTopic = '����� �������';
$strMoreStatusVars = '�������� ���� ������';
$strMoveTable = '��� ���� ��� (����� ������<b>.</b>����):';
$strMoveTableOK = '%s ���� �� ���� ��� %s.';
$strMoveTableSameNames = '������ ��� ������ ��� ����!';
$strMultilingual = '����� ������';
$strMustSelectFile = '��� �� ���� ����� ���� ���� �� �����.';
$strMySQLCharset = '����� ���� MySQL';
$strMySQLReloaded = '�� ����� ����� MySQL �����.';
$strMySQLSaid = 'MySQL ���: ';
$strMySQLServerProcess = 'MySQL %pma_s1%  ��� ������ %pma_s2% -  �������� : %pma_s3%';
$strMySQLShowProcess = '��� ��������';
$strMySQLShowStatus = '��� ���� ������ MySQL';
$strMySQLShowVars ='��� ������� ������ MySQL';

$strName = '�����';
$strNext = '������';
$strNo = '��';
$strNoDatabases = '������ ����� ������';
$strNoDatabasesSelected = '�� ����� ������ �����';
$strNoDescription = '���� ���';
$strNoDropDatabases = '���� "��� ����� ������"����� ';
$strNoExplain = '����� ��� SQL';
$strNoFrames = 'phpMyAdmin ���� ������ �� ������ <b>��������</b>.';
$strNoIndex = '���� ��� ����!';
$strNoIndexPartsDefined = '����� ������� ��� �����!';
$strNoModification = '�� �������';
$strNoOptions = '��� ������� ��� �� �� ������';
$strNoPassword = '�� ���� ��';
$strNoPermission = '���ã ���� ��� ���� ������ ���� ����� %s.';
$strNoPhp = '���� ����� PHP';
$strNoPrivileges = '������ ��� �����';
$strNoQuery = '���� ������� SQL!';
$strNoRights = '��� ���� ������ ������� ��� ���� ��� ����!';
$strNoSpace = '�� ���� ����� ����� ���� ����� %s.';
$strNoTablesFound = '������ ����� ������ �� ����� �������� ���!.';
$strNoUsersFound = '��������(���) �� ��� �������.';
$strNoValidateSQL = '����� ������� �� SQL';
$strNone = '����';
$strNotNumber = '��� ��� ���!';
$strNotOK = '��� ������';
$strNotSet = '������ <b>%s</b> ��� ����� �� ���� �� %s';
$strNotValidNumber = ' ��� ��� ��� �� ����!';
$strNull = '����';
$strNumSearchResultsInTable = '%s ������ �� ������ <i>%s</i>';
$strNumSearchResultsTotal = '<b>�������:</b> <i>%s</i>������';
$strNumTables = '�����';

$strOK = '�����';
$strOftenQuotation = '������ ������ ��������. ������� ���� ��� ������  char � varchar ���� �� " ".';
$strOperations = '�������';
$strOptimizeTable = '��� ������';
$strOptionalControls = '�������. ������ �� ����� ����� �� ����� ������ �� ����� ������.';
$strOptionally = '�������';
$strOr = '��';
$strOverhead = '������';
$strOverwriteExisting = '��� ��� ������� �������� �����';

$strPHP40203 = '��� ������ ������� 4.2.3 �� PHP ����� ����� ��� ���� ���� �� ������� �� ������ ������ ������ (mbstring). ���� �� ����� ��� PHP ��� 19404. �� ���� �������� ��� ������ �� PHP �� phpMyAdmin.';
$strPHPVersion = ' PHP ������';
$strPageNumber = '���� ���:';
$strPaperSize = '��� �����';
$strPartialText = '���� �����';
$strPassword = '���� ����';
$strPasswordChanged = '�� ����� ���� ������ �� %s �����.';
$strPasswordEmpty = '���� ���� ����� !';
$strPasswordNotSame = '����� ���� ��� ��������� !';
$strPdfDbSchema = '���� ����� �������� "%s" - ������ %s';
$strPdfInvalidTblName = '������ "%s" ��� �����!';
$strPdfNoTables = '�� ���� �����';
$strPerHour = '��� ����';
$strPerMinute = '��� �����';
$strPerSecond = '��� �����';
$strPhoneBook = '���� ������';
$strPhp = '���� ����� PHP';
$strPmaDocumentation = '������� ������� �� phpMyAdmin (�����������)';
$strPmaUriError = '������� <span dir="ltr"><tt>$cfg[\'PmaAbsoluteUri\']</tt></span> ��� ������ �� ��� ������� !';
$strPortrait = '��� ������';
$strPos1 = '�����';
$strPrevious = '����';
$strPrimary = '�����';
$strPrimaryKeyHasBeenDropped = '��� �� ��� ������� �������';
$strPrimaryKeyName = '��� ������� ������� ��� �� ���� �����... PRIMARY!';
$strPrimaryKeyWarning = '("�������" <b>���</b> ��� �� ���� ����� <b>������ ���</b> ������� �������!)';
$strPrint = '����';
$strPrintView = '��� ���� �������';
$strPrintViewFull = '��� ������� (�� ������ �������).';
$strPrivDescAllPrivileges = '������ �� ���������� ��� GRANT.';
$strPrivDescAlter = '���� ������ ���� ������� �������� ������.';
$strPrivDescCreateDb = '���� ������ ����� ������ ������ �����.';
$strPrivDescCreateTbl = '���� ������ ����� �����.';
$strPrivDescCreateTmpTable = '���� ������ ����� ������.';
$strPrivDescDelete = '���� ���� ��������.';
$strPrivDescDropDb = '���� ���� ����� ��������.';
$strPrivDescDropTbl = '���� ���� �������.';
$strPrivDescExecute = '���� ������ ��������� �������� )stored procedures(� ��� �� �� ����� �� ��� ������ �� ���� MySQL.';
$strPrivDescFile = '���� �������� ������ �������� �� ���� ��������.';
$strPrivDescGrant = '���� ������ ���������� ���������� ��� ����� ����� ����� ���������.';
$strPrivDescIndex = '���� ������ ���� �������.';
$strPrivDescInsert = '���� ������ �������� ��������.';
$strPrivDescLockTables = '���� ���� ������� �������� ��������.';
$strPrivDescMaxConnections = '���� �� ��� ��������� ������� ���� ���� �������� ����� ��� ����.';
$strPrivDescMaxQuestions = '���� ��� ����������� ���� ������ �������� ������� ��� ������ ��� ����.';
$strPrivDescMaxUpdates = '���� ��� ������� ���� ������ �������� ��� ���ɡ ����� ���� �� ���� �� ����� ������.';
$strPrivDescProcess3 = '���� ������ ������� ���������� �������.';
$strPrivDescProcess4 = '���� ���� ��������� ������� �� ��� ��������.';
$strPrivDescReferences = '��� �� �� ����� �� ���� MySQL ��������.';
$strPrivDescReload = '���� ������ ����� ������� ������ ������ ��� ������.';
$strPrivDescReplClient = '���� ���� �������� ������� �� ���� ���� slaves/masters.';
$strPrivDescReplSlave = '����� ������ ��������.';
$strPrivDescSelect = '���� ������ ��������.';
$strPrivDescShowDb = '���� ������� ������ ����� ���� ����� ��������.';
$strPrivDescShutdown = '���� ������ ��� ������.';
$strPrivDescSuper = '���� �������� ��� �� ��� ��� ��� ��������� ������.� ����� ������ �������� ���� ��������� ������� other users.';
$strPrivDescUpdate = '���� ������ ��������.';
$strPrivDescUsage = '�� �������.';
$strPrivileges = '����������';
$strPrivilegesReloaded = '�� ����� ����� ��������� �����.';
$strProcesslist = '��� ���������';
$strPutColNames = '�� ����� ������ �� ����� �����';

$strQBE = '������� ������ ����';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = '����� ���������';
$strQueryOnDb = '�� ����� �������� SQL-������� <b>%s</b>:';
$strQuerySQLHistory = '���� SQL �����';
$strQueryStatistics = '<b>�������� ���������</b>: %s ������� ���� ��� ������ ��� ������.';
$strQueryTime = '������ ��������� %01.4f �����';
$strQueryType = '��� ���������';
$strQueryWindowLock = '�� ���� ��� ��� ��������� �� ���� �������';

$strReType = '��� �����';
$strReceived = '�������';
$strRecords = '���������';
$strReferentialIntegrity = '����� ������� �������:';
$strRelationNotWorking = '��� ����� ������� �������� ����� �������� ���������. ������ ����� ���� %s���%s.';
$strRelationView = '��� �������';
$strRelationalSchema = '���� ����������';
$strRelations = '�������';
$strReloadFailed = ' ����� ����� �����MySQL.';
$strReloadMySQL = '����� ����� MySQL';
$strReloadingThePrivileges = '��� ����� ����� ���������.';
$strRemoveSelectedUsers = '���� ���������� ��������';
$strRenameTable = '����� ��� ���� ���';
$strRenameTableOK = '�� ����� ����� ��� %s  ����%s';
$strRepairTable = '����� ������';
$strReplace = '�������';
$strReplaceNULLBy = '������ NULL ��';
$strReplaceTable = '������� ������ ������ ������';
$strReset = '�����';
$strResourceLimits = '���� �������';
$strRevoke = '�����';
$strRevokeAndDelete = '������ �� ��������� ������� �� ���������� �� ������ ��� ���.';
$strRevokeAndDeleteDescr = '��� ���� �������� USAGE ��� ���������� ��� ��� ����� ����� ���������.';
$strRevokeMessage = '��� ����� ���������� �� %s';
$strRowLength = '��� ����';
$strRowSize = ' ���� ���� ';
$strRows = '����';
$strRowsFrom = '���� ���� ��';
$strRowsModeFlippedHorizontal = ')������ ������( ������';
$strRowsModeHorizontal = '����';
$strRowsModeOptions = ' %s � ����� ������ ��� %s ���';
$strRowsModeVertical = '�����';
$strRowsStatistic = '��������';
$strRunQuery = '����� ���������';
$strRunSQLQuery = '����� �������/��������� SQL ��� ����� ������ %s';
$strRunning = ' ��� ������ %s';
$strRussian = '�������';

$strSQL = 'SQL';
$strSQLExportType = '��� �������';
$strSQLOptions = '������ SQL';
$strSQLParserBugMessage = '���� ������ ��� ���� ��� ��� �� ����� SQL. ����� ����� �������� ����ɡ ������ �� �� ������ ������� ����� ��������. ��� ����� ������� ������ �� ���� ��� ����� ����� ��� ����� ��� ������ ��� ����� ���� ����� �������. ����� ����� ����� �������� ������ ��� ����� MySQL. �� ������ ����� ��� ���� MySQL ����� �� ���� ���� ����ɡ ��� ����� �������. �� ��� ���� ����� �� �� ���� ������� �� ��� ��� ������� ��� ������ѡ ����� ���� ��� �������� �������� ���� ���� ������ɡ ��� ������ ����� ��� �� ��� �������� �� ����� ����� �����:';
$strSQLParserUserError = '���� �� ���� ��� �� ������� SQL. ��� ������ ����� ����� �� ���� MySQL ����� �� ����� ������ɡ �� ��� ���� ����ɡ.';
$strSQLQuery = '�������-SQL';
$strSQLResult = '���� ������� SQL';
$strSQPBugInvalidIdentifer = '����� ��� ����';
$strSQPBugUnclosedQuote = '����� ����� ��� �����';
$strSQPBugUnknownPunctuation = '�� ����� ��� �����';
$strSave = '�����';
$strSaveOnServer = '���� ��� ������ �� ������ %s';
$strScaleFactorSmall = '���� ����� ������� ����� ��� ������� ������ �� ���� �����.';
$strSearch = '����';
$strSearchFormTitle = '���� �� ����� ��������';
$strSearchInTables = '���� ������)�������(:';
$strSearchNeedle = '������� �� ����� ������� ����� ���� (wildcard: "%"):';
$strSearchOption1 = '��� ����� ��� �������';
$strSearchOption2 = '�� �������';
$strSearchOption3 = '������ ������';
$strSearchOption4 = '����� ������';
$strSearchResultsFor = '���� �� ������� �� "<i>%s</i>" %s:';
$strSearchType = '����:';
$strSecretRequired = '����� ��� ������� ���� ��� ���� ������ �������.';
$strSelectADb = '���� ����� ������ �� �������';
$strSelectAll = '����� ����';
$strSelectFields = '������ ���� (��� ����� ����):';
$strSelectNumRows = '�� ���������';
$strSelectTables = '���� �������';
$strSend = '��� ����';
$strSent = '������';
$strServer = '����';
$strServerChoice = '������ ������';
$strServerStatus = '������ �������';
$strServerStatusUptime = '��� ��� ��� ���� MySQL ��� %s. ��� ����� �� %s.';
$strServerTabProcesslist = '��������';
$strServerTabVariables = '��������';
$strServerTrafficNotes = '<b>���� ������</b>: ���� ��� ������� �������� ���� ������ ������ ���� ������ ��� ������.';
$strServerVars = '�������� �������� ������';
$strServerVersion = '������ ������';
$strSessionValue = '���� ������';
$strSetEnumVal = '��� ��� ��� ����� �� "enum" �� "set", ������ ����� ����� �������� ��� �������: \'a\',\'b\',\'c\'...<br />��� ��� ����� ��� ��� ����� ������ ������� ������ ("\") �� ����� �������� ������� ("\'") ���� ��� ��� �����, ������ ����� ����� ������ (����� \'\\\\xyz\' �� \'a\\\'b\').';
$strShow = '���';
$strShowAll = '���� ����';
$strShowColor = '���� �����';
$strShowDatadictAs = '����� ����� ��������';
$strShowFullQueries = '���� ����������� �����';
$strShowGrid = '���� ����� ������';
$strShowPHPInfo = '��� ��������� �������� �  PHP';
$strShowTableDimension = '����� ����� �������';
$strShowTables = '���� ������';
$strShowThisQuery = ' ��� ��� ��������� ��� ��� ���� ';
$strShowingRecords = '������ ������� ';
$strSimplifiedChinese = '������� �������';
$strSingly = '(����)';
$strSize = '�����';
$strSort = '�����';
$strSortByKey = '���� ��� �������';
$strSpaceUsage = '������� ��������';
$strSplitWordsWithSpace = '������� ������ ���� ����� (" ").';
$strStatCheckTime = '������ ������';
$strStatCreateTime = '�������';
$strStatUpdateTime = '������� ������';
$strStatement = '�����';
$strStatus = '����';
$strStrucCSV = '������ CSV';
$strStrucData = '������ ���������';
$strStrucDrop = ' ����� \'��� ���� ��� ��� ������\' �� �������';
$strStrucExcelCSV = '������ CSV ������� ��������� ����';
$strStrucOnly = '������ ���';
$strStructPropose = '����� ���� ������';
$strStructure = '����';
$strSubmit = '�����';
$strSuccess = '����� �� �� ������ ����� SQL-�������';
$strSum = '�������';
$strSwedish = '��������';
$strSwitchToTable = '���� ��� ������ �������';

$strTable = '������ ';
$strTableComments = '������� ��� ������';
$strTableEmpty = '��� ������ ����!';
$strTableHasBeenDropped = '���� %s �����';
$strTableHasBeenEmptied = '���� %s ������ ���������';
$strTableHasBeenFlushed = '��� �� ����� ����� ������ %s  �����';
$strTableMaintenance = '����� ������';
$strTableOfContents = '���� ���������';
$strTableOptions = '������ ������';
$strTableStructure = '���� ������';
$strTableType = '��� ������';
$strTables = '%s  ���� (�����)';
$strTblPrivileges = '������� ���� �������';
$strTextAreaLength = ' ���� ����,<br /> ��� ������� �� ��� ����� ��� ���� ������� ';
$strThai = '����������';
$strTheContent = '��� �� ����� ������� ����.';
$strTheContents = '��� �� ������� ������� ������ ������ ������ �������� ������ �� ������� ������� ���� �������� �����.';
$strTheTerminator = '���� ������.';
$strThisHost = '��� ������';
$strThisNotDirectory = '�� ��� ��� ������';
$strThreadSuccessfullyKilled = '�� ����� �������� %s �����.';
$strTime = '���';
$strToggleScratchboard = 'toggle scratchboard';
$strTotal = '�������';
$strTotalUC = '����� ����';
$strTraditionalChinese = '������� ���������';
$strTraffic = '������ ���';
$strTransformation_image_jpeg__inline = '���� ���� ����� ����� ����ǡ ��������:  ����֡ �������� ������� )����� ������� ������ �����(.';
$strTransformation_image_jpeg__link = '���� ������ ���� ������ (direct blob download, i.e.).';
$strTransformation_image_png__inline = '���� ���/jpeg: ���� �����';
$strTransformation_text_plain__dateformat = '������ TIME, TIMESTAMP �� DATETIME �������� �������� ����� ������� ������ ����� ��. ������ ����� �� ������� )��������) ����� ��� ���� ��� timestamp )��� ���� �������(. ������ ������ �� ����� ����� ����� ����� ��� ��������� �������� ��PHP strftime().';
$strTransformation_text_plain__external = '����� ���: ����� ������� ������� � ���� ������ ������ ����� ��� ������ ���������. ������ ������ ������� ����������. ������ ���������� �� Tidy� �� ���� ����� �� HTML ���� ����. ������ ����ɡ ���� �� ���� ������ ����� libraries/transformations/text_plain__external.inc.php ������ ������� ���� ���� �� ���� ��� ������. ������ ����� ��� ��� �� ��� �������� ���� ���� �� ������� ������� ������ �� ��������� ��������. ��� ���� ������ �����ˡ �� ��� ����� 1� ������ �������� �������� htmlspecialchars() )������ ���������� 1(. ����� ���ڡ �� ��� ����� 1 ��� ���� ����� NOWRAP ��� ������ ������� ��� ���� ������ ������ ��� ����� ����� )������ ���������� 1(.';
$strTransformation_text_plain__formatted = '����� ������� ������ �����. �� ��� ��� �� Escaping.';
$strTransformation_text_plain__imagelink = '���� ���� ����ء ����� ����� ��� ��� ����ݡ ������ ����� �� ����� ��� "http://domain.com/"� ������� ������ �� ����� ������� ������� �� ��������.';
$strTransformation_text_plain__link = '���� ������ ����� ����� ��� ����ݡ ������� ����� �� ����� ��� "http://domain.com/"� ������� ������ �� ������� ������.';
$strTransformation_text_plain__substr = '���� ��� ���� �� ����. ������ ����� ���� ���� ��� ���� ���� )��� ���� �������(. ������ ������ �� ����� ��� ���� ��������. �� ��� ������ ������ �� ���� ������. ������ ������ ���� �� �� ������ ��� ���� ��� �������� ��� ������� ��� �� ���� )... ���� �������(.';
$strTransformation_text_plain__unformatted = '���� �� ����� HTML ������. �� ���� �� ����� HTML.';
$strTruncateQueries = '���� ����������� ��������';
$strTurkish = '�������';
$strType = '�����';

$strUkrainian = '���������';
$strUncheckAll = '����� ����� ����';
$strUnicode = '�������';
$strUnique = '����';
$strUnknown = '��� ������';
$strUnselectAll = '����� ����� ����';
$strUpdComTab = '���� ���� ������� ������ ����� ���� Column_comments.';
$strUpdatePrivMessage = '��� ���� ����� ���������� �� %s.';
$strUpdateProfileMessage = '��� �� ����� ����� �������.';
$strUpdateQuery = '����� �������';
$strUpgrade = '���� ������� ��� %s %s �� �����.';
$strUsage = '�������';
$strUseBackquotes = '����� ����� ������� � ������ � "`" ';
$strUseHostTable = '������ ������ ������';
$strUseTables = '������ ������';
$strUseTextField = '������ ��� ���';
$strUseThisValue = '������ ��� ������';
$strUser = '��������';
$strUserAlreadyExists = '��� �������� %s ����� ������!';
$strUserEmpty = '��� �������� ����!';
$strUserName = '��� ��������';
$strUserNotFound = '�������� ������ ��� ����� �� ���� ���������.';
$strUserOverview = '������� ��������';
$strUsersDeleted = '�� ��� ���������� �������� �����.';
$strUsersHavingAccessToDb = '���������� ��� ������ ������ ��� &quot;%s&quot;';

$strValidateSQL = '������ �� ������� SQL';
$strValidatorError = '�� ���� ����� ���� SQL. ������ ������ ��� ��� ��� ������ ������ PHP ��� �� ����� �� %s�������%s.';
$strValue = '������';
$strVar = '������';
$strViewDump = '��� ���� ������ ';
$strViewDumpDB = '��� ���� ����� ��������';
$strViewDumpDatabases = '���� �� ���� ���� ����� ��������.';

$strWebServerUploadDirectory = '���� ����� ������� ��� ���� ������';
$strWebServerUploadDirectoryError = '������ ���� ����� ������ ���� �� ���� ������ ����.';
$strWelcome = '����� �� �� %s';
$strWestEuropean = '������ �������';
$strWildcard = '��� ����';
$strWindowNotFound = '�� ���� ����� ����� ������� ���������. ���� ��� ����� �������� �� �� ������� ���� ������� ��� ������� ���� ������� ������.';
$strWithChecked = ': ��� ������';
$strWritingCommentNotPossible = '����� ������� ��� ����';
$strWritingRelationNotPossible = '����� ������� ��� �����';
$strWrongUser = '��� ��� ��������/���� ����. ������ �����.';

$strXML = 'XML';

$strYes = '���';

$strZeroRemovesTheLimit = '������: ����� ��� �������� ����� 0 )���( ���� �����.';
$strZip = '"zipped" "�����"';

$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strOperator = 'Operator';  //to translate
$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strCalendar = 'Calendar';  //to translate
$strRefresh = 'Refresh';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strSpanish = 'Spanish';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strTakeIt = 'take it';  //to translate
$strHexForBinary = 'Use hexadecimal for binary fields';  //to translate
$strIcelandic = 'Icelandic';  //to translate
$strLatvian = 'Latvian';  //to translate
$strPolish = 'Polish';  //to translate
$strRomanian = 'Romanian';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strSlovak = 'Slovak';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate
$strPersian = 'Persian';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strInsertBookmarkTitle = 'Please insert bookmark title';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinaryLog = 'Binary log';  //to translate
$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strIndexWarningPrimary = 'PRIMARY and INDEX keys should not both be set for column `%s`';//to translate
$strIndexWarningUnique = 'UNIQUE and INDEX keys should not both be set for column `%s`';//to translate
$strIndexWarningMultiple = 'More than one %s key was created for column `%s`';//to translate
$strIndexWarningTable = 'Problems with indexes of table `%s`';//to translate
$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate
$strSQLExportCompatibility = 'SQL export compatibility';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
?>

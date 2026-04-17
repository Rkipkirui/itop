<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/session-message/add' => [[['_route' => 'p_session_message_add', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\SessionMessageController::AddMessageAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'p_home', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\DefaultController::HomeAction'], null, null, null, false, false, null]],
        '/user/edit_person' => [[['_route' => 'p_user_profile_brick_edit_person', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\UserProfileBrickController::EditPerson'], null, null, null, false, false, null]],
        '/object/get-information/json' => [[['_route' => 'p_object_get_information_json', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::GetInformationAsJsonAction'], null, null, null, false, false, null]],
        '/object/get-information-for-linked-set/json' => [[['_route' => 'p_object_get_information_for_linked_set_json', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::GetInformationForLinkedSetAsJsonAction'], null, null, null, false, false, null]],
        '/object/attachment/add' => [[['_route' => 'p_object_attachment_add', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::AttachmentAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/user(?:/([^/]++))?(*:26)'
                .'|/object/(?'
                    .'|create(?'
                        .'|/([^/]++)(*:62)'
                        .'|\\-from\\-factory/([^/]++)/([^/]++)/([^/]++)(*:111)'
                    .')'
                    .'|edit/([^/]++)/([^/]++)(*:142)'
                    .'|view/([^/]++)/([^/]++)(?'
                        .'|(*:175)'
                        .'|/([^/]++)(*:192)'
                    .')'
                    .'|a(?'
                        .'|pply\\-stimulus/([^/]++)/([^/]++)/([^/]++)(*:246)'
                        .'|ttachment/d(?'
                            .'|isplay/([^/]++)(*:283)'
                            .'|ownload/([^/]++)(*:307)'
                        .')'
                    .')'
                    .'|search/(?'
                        .'|from\\-attribute/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:379)'
                        .'|autocomplete/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:436)'
                        .'|([^/]++)/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?(*:489)'
                    .')'
                    .'|document/d(?'
                        .'|isplay/([^/]++)/([^/]++)/([^/]++)(*:544)'
                        .'|ownload/([^/]++)/([^/]++)/([^/]++)(*:586)'
                    .')'
                .')'
                .'|/create/([^/]++)(*:612)'
                .'|/browse/([^/]++)(?'
                    .'|(*:639)'
                    .'|/(?'
                        .'|([^/]++)(*:659)'
                        .'|list/page/(\\d+)/show(?:/(\\d+))?(*:698)'
                        .'|tree/expand/([^/]++)(?:/([^/]++))?(*:740)'
                    .')'
                .')'
                .'|/manage/(?'
                    .'|([^/]++)(?'
                        .'|(?:/([^/]++))?(*:786)'
                        .'|/(?'
                            .'|display\\-as/(list|pie-chart|bar-chart)(?:/([^/]++))?(*:850)'
                            .'|([^/]++)/([^/]++)/page/(\\d+)/show(?:/(\\d+))?(*:902)'
                        .')'
                    .')'
                    .'|export/excel/start/([^/]++)/([^/]++)/([^/]++)(*:957)'
                .')'
                .'|/aggregate\\-page/([^/]++)(*:991)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'p_user_profile_brick', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\UserProfileBrickController::DisplayAction', 'sBrickId' => null], ['sBrickId'], null, null, false, true, null]],
        62 => [[['_route' => 'p_object_create', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::CreateAction'], ['sObjectClass'], null, null, false, true, null]],
        111 => [[['_route' => 'p_object_create_from_factory', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::CreateFromFactoryAction'], ['sObjectClass', 'sObjectId', 'sEncodedMethodName'], null, null, false, true, null]],
        142 => [[['_route' => 'p_object_edit', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::EditAction'], ['sObjectClass', 'sObjectId'], null, null, false, true, null]],
        175 => [[['_route' => 'p_object_view', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::ViewAction'], ['sObjectClass', 'sObjectId'], null, null, false, true, null]],
        192 => [[['_route' => 'p_object_view_from_attribute', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::ViewFromAttributeAction'], ['sObjectClass', 'sObjectAttCode', 'sObjectAttValue'], null, null, false, true, null]],
        246 => [[['_route' => 'p_object_apply_stimulus', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::ApplyStimulusAction'], ['sStimulusCode', 'sObjectClass', 'sObjectId'], null, null, false, true, null]],
        283 => [[['_route' => 'p_object_attachment_display', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::AttachmentAction', 'sOperation' => 'display'], ['sAttachmentId'], null, null, false, true, null]],
        307 => [[['_route' => 'p_object_attachment_download', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::AttachmentAction', 'sOperation' => 'download'], ['sAttachmentId'], null, null, false, true, null]],
        379 => [[['_route' => 'p_object_search_from_attribute', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::SearchFromAttributeAction', 'sHostObjectClass' => null, 'sHostObjectId' => null], ['sTargetAttCode', 'sHostObjectClass', 'sHostObjectId'], null, null, false, true, null]],
        436 => [[['_route' => 'p_object_search_autocomplete', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::SearchAutocompleteAction', 'sHostObjectClass' => null, 'sHostObjectId' => null], ['sTargetAttCode', 'sHostObjectClass', 'sHostObjectId'], null, null, false, true, null]],
        489 => [[['_route' => 'p_object_search_generic', 'sMode' => '-sMode-', 'sHostObjectClass' => null, 'sHostObjectId' => null], ['sMode', 'sTargetAttCode', 'sHostObjectClass', 'sHostObjectId'], null, null, false, true, null]],
        544 => [[['_route' => 'p_object_document_display', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::DocumentAction', 'sOperation' => 'display'], ['sObjectClass', 'sObjectId', 'sObjectField'], null, null, false, true, null]],
        586 => [[['_route' => 'p_object_document_download', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController::DocumentAction', 'sOperation' => 'download'], ['sObjectClass', 'sObjectId', 'sObjectField'], null, null, false, true, null]],
        612 => [[['_route' => 'p_create_brick', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\CreateBrickController::DisplayAction'], ['sBrickId'], null, null, false, true, null]],
        639 => [[['_route' => 'p_browse_brick', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction'], ['sBrickId'], null, null, false, true, null]],
        659 => [[['_route' => 'p_browse_brick_mode', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction'], ['sBrickId', 'sBrowseMode'], null, null, false, true, null]],
        698 => [[['_route' => 'p_browse_brick_mode_list', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction', 'sBrowseMode' => 'list', 'sDataLoading' => 'lazy', 'iPageNumber' => 1, 'iListLength' => 20], ['sBrickId', 'iPageNumber', 'iListLength'], null, null, false, true, null]],
        740 => [[['_route' => 'p_browse_brick_mode_tree', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController::DisplayAction', 'sBrowseMode' => 'tree', 'sDataLoading' => 'lazy', 'sNodeId' => null], ['sBrickId', 'sLevelAlias', 'sNodeId'], null, null, false, true, null]],
        786 => [[['_route' => 'p_manage_brick', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::DisplayAction', 'sGroupingTab' => null], ['sBrickId', 'sGroupingTab'], null, null, false, true, null]],
        850 => [[['_route' => 'p_manage_brick_display_as', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::DisplayAction', 'sGroupingTab' => null], ['sBrickId', 'sDisplayMode', 'sGroupingTab'], null, null, false, true, null]],
        902 => [[['_route' => 'p_manage_brick_lazy', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::DisplayAction', 'sDataLoading' => 'lazy', 'iPageNumber' => 1, 'iListLength' => 20], ['sBrickId', 'sGroupingTab', 'sGroupingArea', 'iPageNumber', 'iListLength'], null, null, false, true, null]],
        957 => [[['_route' => 'p_manage_brick_excel_export_start', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController::ExcelExportStartAction'], ['sBrickId', 'sGroupingTab', 'sGroupingArea'], null, null, false, true, null]],
        991 => [
            [['_route' => 'p_aggregatepage_brick', '_controller' => 'Combodo\\iTop\\Portal\\Controller\\AggregatePageBrickController::DisplayAction'], ['sBrickId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php
/*
 * @copyright   Copyright (C) 2010-2024 Combodo SAS
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	'Menu:RequestManagement' => 'Helpdesk',
	'Menu:RequestManagement+' => '',
	'Menu:RequestManagementProvider' => 'Helpdesk provider',
	'Menu:RequestManagementProvider+' => '',
	'Menu:UserRequest:Provider' => 'Open requests transferred to provider',
	'Menu:UserRequest:Provider+' => '',
	'Menu:UserRequest:Overview' => 'Overview',
	'Menu:UserRequest:Overview+' => '',
	'Menu:NewUserRequest' => 'New user request',
	'Menu:NewUserRequest+' => 'Create a new user request ticket',
	'Menu:SearchUserRequests' => 'Search for user requests',
	'Menu:SearchUserRequests+' => 'Search for user request tickets',
	'Menu:UserRequest:Shortcuts' => 'Shortcuts',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => 'Requests assigned to me',
	'Menu:UserRequest:MyRequests+' => 'Requests assigned to me (as Agent)',
	'Menu:UserRequest:MySupportRequests' => "My support calls",
	'Menu:UserRequest:MySupportRequests+' => "",
	'Menu:UserRequest:EscalatedRequests' => 'Hot requests',
	'Menu:UserRequest:EscalatedRequests+' => '',
	'Menu:UserRequest:OpenRequests' => 'All open requests',
	'Menu:UserRequest:OpenRequests+' => '',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Requests assigned to me',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Requests of the last 14 days (per type)',
	'UI-RequestManagementOverview-Last-14-days' => 'Requests of the last 14 days (per day)',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by organization',
	'Class:UserRequest:KnownErrorList' => 'Known Errors',
	'Class:UserRequest:KnownErrorList+' => 'Known Errors related to Functional CI linked to the current ticket',
	'Menu:UserRequest:MyWorkOrders' => 'Work orders assigned to me',
	'Menu:UserRequest:MyWorkOrders+' => 'All work orders assigned to me',
	'Class:Problem:KnownProblemList' => 'Known problems',
	'Tickets:Related:OpenIncidents' => 'Open incidents',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: UserRequest
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:UserRequest' => 'User Request',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => 'Status',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => 'New',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Assigned',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Approved',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Rejected',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => 'Pending',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Resolved',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Closed',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => 'Request Type',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:incident' => 'Incident',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => '',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Service request',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => '',
	'Class:UserRequest/Attribute:impact' => 'Impact',
	'Class:UserRequest/Attribute:impact+' => 'Impact is the severity of the fault, how many end users are affected',
	'Class:UserRequest/Attribute:impact/Value:1' => 'A department',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => 'A service',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => 'A person',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => 'Priority',
	'Class:UserRequest/Attribute:priority+' => 'Order in which tickets need to be handled',
	'Class:UserRequest/Attribute:priority/Value:1' => 'Critical',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'Highest priority',
	'Class:UserRequest/Attribute:priority/Value:2' => 'High',
	'Class:UserRequest/Attribute:priority/Value:2+' => '',
	'Class:UserRequest/Attribute:priority/Value:3' => 'Medium',
	'Class:UserRequest/Attribute:priority/Value:3+' => '',
	'Class:UserRequest/Attribute:priority/Value:4' => 'Low',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'Lowest priority',
	'Class:UserRequest/Attribute:urgency' => 'Urgency',
	'Class:UserRequest/Attribute:urgency+' => 'How quickly the fault needs to be resolved',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'Critical',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'Most urgent',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'High',
	'Class:UserRequest/Attribute:urgency/Value:2+' => '',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'Medium',
	'Class:UserRequest/Attribute:urgency/Value:3+' => '',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'Low',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'Lowest urgency level',
	'Class:UserRequest/Attribute:origin' => 'Origin',
	'Class:UserRequest/Attribute:origin+' => 'What\'s the trigger of this request ticket creation',
	'Class:UserRequest/Attribute:origin/Value:in_person' => 'In-person',
	'Class:UserRequest/Attribute:origin/Value:in_person+' => 'Request created following a face-to-face discussion',
	'Class:UserRequest/Attribute:origin/Value:chat' => 'Chat',
	'Class:UserRequest/Attribute:origin/Value:chat+' => 'Request created following a chat discussion',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'Email',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'Request created on an email reception',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'Monitoring',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'Request created on a monitoring alert',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'Phone',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'Request created following a phone call',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'Portal',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'Request created on the user portal',
	'Class:UserRequest/Attribute:approver_id' => 'Approver',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => 'Approver Email',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => 'Service',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => 'Service name',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Service subcategory name',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Yes',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => '',
	'Class:UserRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => 'Assignment date',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => 'Resolution date',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => 'Last pending date',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => 'cumulated pending',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => 'Time To Own',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => 'Time To Resolve',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA tto passed',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => 'Resolution delay',
	'Class:UserRequest/Attribute:time_spent+' => '',
	'Class:UserRequest/Attribute:resolution_code' => 'Resolution code',
	'Class:UserRequest/Attribute:resolution_code+' => 'What was done to resolve the request?',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'Assistance',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'Bug fixed',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'Hardware repair',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'Other',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'Software patch',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'System update',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'Training',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => '',
	'Class:UserRequest/Attribute:solution' => 'Solution',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => 'Pending reason',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => 'Parent request',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Parent problem',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Ref problem',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => 'Parent change',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => 'Child Requests',
	'Class:UserRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request',
	'Class:UserRequest/Attribute:public_log' => 'Public log',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => 'User satisfaction',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Fairly satisfied',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Rather dissatisfied',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Very dissatisfied',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => '',
	'Class:UserRequest/Attribute:user_comment' => 'User comment',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => 'Assign',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Re-assign',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approve',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => 'Reject',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => 'Pending',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Automatic resolve',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Automatic close',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Mark as resolved',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => 'Close this request',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Re-open',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself',
));


Dict::Add('EN US', 'English', 'English', array(
	'Portal:TitleDetailsFor_Request' => 'Details for request',
	'Portal:ButtonUpdate' => 'Update',
	'Portal:ButtonClose' => 'Close',
	'Portal:ButtonReopen' => 'Reopen',
	'Portal:ShowServices' => 'Service catalogue',
	'Portal:SelectRequestType' => 'Select a type of request',
	'Portal:SelectServiceElementFrom_Service' => 'Select a service element for %1$s',
	'Portal:ListServices' => 'List of services',
	'Portal:TitleDetailsFor_Service' => 'Details for Service',
	'Portal:Button:CreateRequestFromService' => 'Create a Request for this service',
	'Portal:ListOpenRequests' => 'List open requests',
	'Portal:UserRequest:MoreInfo' => 'More information',
	'Portal:Details-Service-Element' => 'Service elements',
	'Portal:NoClosedTicket' => 'No closed request',
	'Portal:NoService' => '',
	'Portal:ListOpenProblems' => 'On going problems',
	'Portal:ShowProblem' => 'Problems',
	'Portal:ShowFaqs' => 'FAQs',
	'Portal:NoOpenProblem' => 'No open problem',
	'Portal:SelectLanguage' => "Change you language",
	'Portal:LanguageChangedTo_Lang' => 'Language changed to',
	'Portal:ChooseYourFavoriteLanguage' => 'Choose your favorite language',

	'Class:UserRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
));


Dict::Add('EN US', 'English', 'English', array(
	'Organization:Overview:UserRequests' => 'User Requests from this organization',
	'Organization:Overview:MyUserRequests' => 'My User Requests for this organization',
	'Organization:Overview:Tickets' => 'Tickets for this organization',
));

<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 *
 */
Dict::Add('PL PL', 'Polish', 'Polski', [
	'Class:Contract' => 'Umowa',
	'Class:Contract+' => '',
	'Class:Contract/Attribute:billing_frequency' => 'Częstotliwość rozliczeń',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:contacts_list' => 'Kontakty',
	'Class:Contract/Attribute:contacts_list+' => 'Wszystkie kontakty do tej umowy z klientem',
	'Class:Contract/Attribute:contracttype_id' => 'Typ umowy',
	'Class:Contract/Attribute:contracttype_id+' => '',
	'Class:Contract/Attribute:contracttype_name' => 'Nazwa typu umowy',
	'Class:Contract/Attribute:contracttype_name+' => '',
	'Class:Contract/Attribute:cost' => 'Koszt',
	'Class:Contract/Attribute:cost+' => '',
	'Class:Contract/Attribute:cost_currency' => 'Waluta kosztu',
	'Class:Contract/Attribute:cost_currency+' => '',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => 'Dolar',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:Contract/Attribute:cost_currency/Value:euros' => 'Euro',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => '',
	'Class:Contract/Attribute:cost_unit' => 'Jednostka kosztu',
	'Class:Contract/Attribute:cost_unit+' => '',
	'Class:Contract/Attribute:description' => 'Opis',
	'Class:Contract/Attribute:description+' => '',
	'Class:Contract/Attribute:documents_list' => 'Dokumenty',
	'Class:Contract/Attribute:documents_list+' => 'Wszystkie dokumenty dotyczące tej umowy z klientem',
	'Class:Contract/Attribute:end_date' => 'Data zakończenia',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:finalclass' => 'Podklasa umowy',
	'Class:Contract/Attribute:finalclass+' => 'Nazwa ostatniej klasy',
	'Class:Contract/Attribute:name' => 'Nazwa',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:org_id' => 'Organizacja',
	'Class:Contract/Attribute:org_id+' => '',
	'Class:Contract/Attribute:organization_name' => 'Nazwa klienta',
	'Class:Contract/Attribute:organization_name+' => 'Nazwa zwyczajowa',
	'Class:Contract/Attribute:provider_id' => 'Dostawca',
	'Class:Contract/Attribute:provider_id+' => '',
	'Class:Contract/Attribute:provider_name' => 'Nazwa dostawcy',
	'Class:Contract/Attribute:provider_name+' => '',
	'Class:Contract/Attribute:start_date' => 'Data rozpoczęcia',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:status' => 'Status',
	'Class:Contract/Attribute:status+' => '',
	'Class:Contract/Attribute:status/Value:implementation' => 'wdrażane',
	'Class:Contract/Attribute:status/Value:implementation+' => 'wdrażane',
	'Class:Contract/Attribute:status/Value:obsolete' => 'wycofane',
	'Class:Contract/Attribute:status/Value:obsolete+' => 'wycofane',
	'Class:Contract/Attribute:status/Value:production' => 'użytkowane',
	'Class:Contract/Attribute:status/Value:production+' => 'użytkowane',
	'Class:ContractType' => 'Typ umowy',
	'Class:ContractType+' => '',
	'Class:CustomerContract' => 'Umowa z klientem',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:functionalcis_list' => 'Konfiguracje',
	'Class:CustomerContract/Attribute:functionalcis_list+' => 'Wszystkie elementy konfiguracji objęte niniejszą umową',
	'Class:CustomerContract/Attribute:providercontracts_list' => 'Umowy z dostawcami',
	'Class:CustomerContract/Attribute:providercontracts_list+' => 'Wszystkie umowy z dostawcami na świadczenie usług w ramach tej umowy (umowa stanowiąca podstawę)',
	'Class:CustomerContract/Attribute:services_list' => 'Usługi',
	'Class:CustomerContract/Attribute:services_list+' => 'Wszystkie usługi zakupione w ramach tej umowy',
	'Class:DeliveryModel' => 'Model obsługi',
	'Class:DeliveryModel+' => '',
	'Class:DeliveryModel/Attribute:contacts_list' => 'Kontakty',
	'Class:DeliveryModel/Attribute:contacts_list+' => 'Wszystkie kontakty (zespoły i osoby) dla tego modelu obsługi',
	'Class:DeliveryModel/Attribute:customers_list' => 'Klienci',
	'Class:DeliveryModel/Attribute:customers_list+' => 'Wszyscy klienci posiadający ten model obsługi',
	'Class:DeliveryModel/Attribute:description' => 'Opis',
	'Class:DeliveryModel/Attribute:description+' => '',
	'Class:DeliveryModel/Attribute:name' => 'Nazwa',
	'Class:DeliveryModel/Attribute:name+' => '',
	'Class:DeliveryModel/Attribute:org_id' => 'Organizacja',
	'Class:DeliveryModel/Attribute:org_id+' => '',
	'Class:DeliveryModel/Attribute:organization_name' => 'Nazwa organizacji',
	'Class:DeliveryModel/Attribute:organization_name+' => '',
	'Class:Organization/Attribute:deliverymodel_id' => 'Model obsługi',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => 'Nazwa modelu obsługi',
	'Class:Organization/Attribute:deliverymodel_name+' => '',
	'Class:ProviderContract' => 'Umowa z dostawcą',
	'Class:ProviderContract+' => '',
	'Class:ProviderContract/Attribute:coverage' => 'Godziny usługi',
	'Class:ProviderContract/Attribute:coverage+' => '',
	'Class:ProviderContract/Attribute:functionalcis_list' => 'Konfiguracje',
	'Class:ProviderContract/Attribute:functionalcis_list+' => 'Wszystkie elementy konfiguracji objęte niniejszą umową',
	'Class:ProviderContract/Attribute:sla' => 'Umowa SLA',
	'Class:ProviderContract/Attribute:sla+' => 'Umowa dotycząca poziomu usług',
	'Class:SLA' => 'Umowa SLA',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:customercontracts_list' => 'Umowy z klientami',
	'Class:SLA/Attribute:customercontracts_list+' => 'Wszystkie umowy z klientami korzystające z tej umowy SLA',
	'Class:SLA/Attribute:description' => 'Opis',
	'Class:SLA/Attribute:description+' => '',
	'Class:SLA/Attribute:name' => 'Nazwa',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:org_id' => 'Organizacja',
	'Class:SLA/Attribute:org_id+' => '',
	'Class:SLA/Attribute:organization_name' => 'Nazwa organizacji',
	'Class:SLA/Attribute:organization_name+' => '',
	'Class:SLA/Attribute:slts_list' => 'Poziomy usług (SLT)',
	'Class:SLA/Attribute:slts_list+' => 'Wszystkie docelowe poziomy usług dla tej umowy SLA',
	'Class:SLA/Error:UniqueLnkCustomerContractToService' => 'Nie udało się zapisać połączenia z umową klienta %1$s i usługą %2$s : Umowa SLA już istnieje',
	'Class:SLT' => 'Poziom usług SLT',
	'Class:SLT+' => '',
	'Class:SLT/Attribute:metric' => 'Miara',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:tto' => 'Termin podjęcia TTO',
	'Class:SLT/Attribute:metric/Value:tto+' => 'Termin podjęcia TTO',
	'Class:SLT/Attribute:metric/Value:ttr' => 'Termin rozwiązania TTR',
	'Class:SLT/Attribute:metric/Value:ttr+' => 'Termin rozwiązania TTR',
	'Class:SLT/Attribute:name' => 'Nazwa',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:priority' => 'Priorytet',
	'Class:SLT/Attribute:priority+' => '',
	'Class:SLT/Attribute:priority/Value:1' => 'krytyczny',
	'Class:SLT/Attribute:priority/Value:1+' => 'krytyczny',
	'Class:SLT/Attribute:priority/Value:2' => 'wysoki',
	'Class:SLT/Attribute:priority/Value:2+' => 'wysoki',
	'Class:SLT/Attribute:priority/Value:3' => 'średni',
	'Class:SLT/Attribute:priority/Value:3+' => 'średni',
	'Class:SLT/Attribute:priority/Value:4' => 'niski',
	'Class:SLT/Attribute:priority/Value:4+' => 'niski',
	'Class:SLT/Attribute:request_type' => 'Typ zgłoszenia',
	'Class:SLT/Attribute:request_type+' => '',
	'Class:SLT/Attribute:request_type/Value:incident' => 'incydent',
	'Class:SLT/Attribute:request_type/Value:incident+' => 'incydent',
	'Class:SLT/Attribute:request_type/Value:service_request' => 'zgłoszenie serwisowe',
	'Class:SLT/Attribute:request_type/Value:service_request+' => 'zgłoszenie serwisowe',
	'Class:SLT/Attribute:unit' => 'Jednostka',
	'Class:SLT/Attribute:unit+' => '',
	'Class:SLT/Attribute:unit/Value:hours' => 'godzin',
	'Class:SLT/Attribute:unit/Value:hours+' => 'godzin',
	'Class:SLT/Attribute:unit/Value:minutes' => 'minut',
	'Class:SLT/Attribute:unit/Value:minutes+' => 'minut',
	'Class:SLT/Attribute:value' => 'Wartość',
	'Class:SLT/Attribute:value+' => '',
	'Class:Service' => 'Usługa',
	'Class:Service+' => '',
	'Class:Service/Attribute:contacts_list' => 'Kontakty',
	'Class:Service/Attribute:contacts_list+' => 'Wszystkie kontakty do tej usługi',
	'Class:Service/Attribute:customercontracts_list' => 'Umowy z klientami',
	'Class:Service/Attribute:customercontracts_list+' => 'Wszystkie umowy z klientami, którzy kupili tę usługę',
	'Class:Service/Attribute:description' => 'Opis',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:documents_list' => 'Dokumenty',
	'Class:Service/Attribute:documents_list+' => 'Wszystkie dokumenty związane z usługą',
	'Class:Service/Attribute:icon' => 'Ikona',
	'Class:Service/Attribute:icon+' => '',
	'Class:Service/Attribute:name' => 'Nazwa',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:org_id' => 'Dostawca',
	'Class:Service/Attribute:org_id+' => '',
	'Class:Service/Attribute:organization_name' => 'Nazwa dostawcy',
	'Class:Service/Attribute:organization_name+' => '',
	'Class:Service/Attribute:servicefamily_id' => 'Rodzina usług',
	'Class:Service/Attribute:servicefamily_id+' => '',
	'Class:Service/Attribute:servicefamily_name' => 'Nazwa rodziny usług',
	'Class:Service/Attribute:servicefamily_name+' => '',
	'Class:Service/Attribute:servicesubcategories_list' => 'Podkategorie usług',
	'Class:Service/Attribute:servicesubcategories_list+' => 'Wszystkie podkategorie tej usługi',
	'Class:Service/Attribute:status' => 'Status',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:implementation' => 'wdrażane',
	'Class:Service/Attribute:status/Value:implementation+' => 'wdrażane',
	'Class:Service/Attribute:status/Value:obsolete' => 'wycofane',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => 'użytkowane',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/ComplementaryName' => '%1$s - %2$s',
	'Class:ServiceFamily' => 'Rodzina usług',
	'Class:ServiceFamily+' => '',
	'Class:ServiceFamily/Attribute:icon' => 'Ikona',
	'Class:ServiceFamily/Attribute:icon+' => '',
	'Class:ServiceFamily/Attribute:name' => 'Nazwa',
	'Class:ServiceFamily/Attribute:name+' => '',
	'Class:ServiceFamily/Attribute:services_list' => 'Usługi',
	'Class:ServiceFamily/Attribute:services_list+' => 'Wszystkie usługi w tej kategorii',
	'Class:ServiceSubcategory' => 'Podkategoria usługi',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/Attribute:description' => 'Opis',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:name' => 'Nazwa',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:request_type' => 'Typ zgłoszenia',
	'Class:ServiceSubcategory/Attribute:request_type+' => '',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident' => 'incydent',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident+' => 'incydent',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request' => 'zgłoszenie serwisowe',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request+' => 'zgłoszenie serwisowe',
	'Class:ServiceSubcategory/Attribute:service_id' => 'Usługa',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => 'Nazwa usługi',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
	'Class:ServiceSubcategory/Attribute:service_org_id' => 'Dostawca',
	'Class:ServiceSubcategory/Attribute:service_provider' => 'Nazwa dostawcy',
	'Class:ServiceSubcategory/Attribute:status' => 'Status',
	'Class:ServiceSubcategory/Attribute:status+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation' => 'wdrażane',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation+' => 'wdrażane',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete' => 'wycofane',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete+' => 'wycofane',
	'Class:ServiceSubcategory/Attribute:status/Value:production' => 'użytkowane',
	'Class:ServiceSubcategory/Attribute:status/Value:production+' => 'użytkowane',
	'Class:ServiceSubcategory/ComplementaryName' => '%1$s - %2$s',
	'Class:lnkContactToContract' => 'Połączenie Kontakt / Umowa',
	'Class:lnkContactToContract+' => '',
	'Class:lnkContactToContract/Attribute:contact_id' => 'Kontakt',
	'Class:lnkContactToContract/Attribute:contact_id+' => '',
	'Class:lnkContactToContract/Attribute:contact_name' => 'Nazwa kontaktu',
	'Class:lnkContactToContract/Attribute:contact_name+' => '',
	'Class:lnkContactToContract/Attribute:contract_id' => 'Umowa',
	'Class:lnkContactToContract/Attribute:contract_id+' => '',
	'Class:lnkContactToContract/Attribute:contract_name' => 'Nazwa umowy',
	'Class:lnkContactToContract/Attribute:contract_name+' => '',
	'Class:lnkContactToContract/Name' => '%1$s / %2$s',
	'Class:lnkContactToService' => 'Połączenie Kontakt / Usługa',
	'Class:lnkContactToService+' => '',
	'Class:lnkContactToService/Attribute:contact_id' => 'Kontakt',
	'Class:lnkContactToService/Attribute:contact_id+' => '',
	'Class:lnkContactToService/Attribute:contact_name' => 'Nazwa kontaktu',
	'Class:lnkContactToService/Attribute:contact_name+' => '',
	'Class:lnkContactToService/Attribute:service_id' => 'Usługa',
	'Class:lnkContactToService/Attribute:service_id+' => '',
	'Class:lnkContactToService/Attribute:service_name' => 'Nazwa usługi',
	'Class:lnkContactToService/Attribute:service_name+' => '',
	'Class:lnkContactToService/Name' => '%1$s / %2$s',
	'Class:lnkContractToDocument' => 'Połączenie Umowa / Dokument',
	'Class:lnkContractToDocument+' => '',
	'Class:lnkContractToDocument/Attribute:contract_id' => 'Umowa',
	'Class:lnkContractToDocument/Attribute:contract_id+' => '',
	'Class:lnkContractToDocument/Attribute:contract_name' => 'Nazwa umowy',
	'Class:lnkContractToDocument/Attribute:contract_name+' => '',
	'Class:lnkContractToDocument/Attribute:document_id' => 'Dokument',
	'Class:lnkContractToDocument/Attribute:document_id+' => '',
	'Class:lnkContractToDocument/Attribute:document_name' => 'Nazwa dokumentu',
	'Class:lnkContractToDocument/Attribute:document_name+' => '',
	'Class:lnkContractToDocument/Name' => '%1$s / %2$s',
	'Class:lnkCustomerContractToFunctionalCI' => 'Połączenie Umowa z klientem / Konfiguracja',
	'Class:lnkCustomerContractToFunctionalCI+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_id' => 'Umowa z klientem',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_name' => 'Nazwa umowy z klientem',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_id' => 'Konfiguracja',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_name' => 'Nazwa konfiguracji',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_name+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Name' => '%1$s / %2$s',
	'Class:lnkCustomerContractToProviderContract' => 'Połączenie Umowa z klientem / Umowa z dostawcą',
	'Class:lnkCustomerContractToProviderContract+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_id' => 'Umowa z klientem',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_name' => 'Nazwa umowy z klientem',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_id' => 'Umowa z dostawcą',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_id+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_name' => 'Nazwa umowy z dostawcą',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_name+' => '',
	'Class:lnkCustomerContractToProviderContract/Name' => '%1$s / %2$s',
	'Class:lnkCustomerContractToService' => 'Połączenie Umowa z klientem / Usługa',
	'Class:lnkCustomerContractToService+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id' => 'Umowa z klientem',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name' => 'Nazwa umowy z klientem',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_id' => 'Usługa',
	'Class:lnkCustomerContractToService/Attribute:service_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_name' => 'Nazwa usługi',
	'Class:lnkCustomerContractToService/Attribute:service_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_id' => 'Umowa SLA',
	'Class:lnkCustomerContractToService/Attribute:sla_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_name' => 'Nazwa umowy SLA',
	'Class:lnkCustomerContractToService/Attribute:sla_name+' => '',
	'Class:lnkCustomerContractToService/Name' => '%1$s / %2$s',
	'Class:lnkDeliveryModelToContact' => 'Połączenie Model obsługi / Kontakt',
	'Class:lnkDeliveryModelToContact+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id' => 'Kontakt',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name' => 'Nazwa kontaktu',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id' => 'Model obsługi',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name' => 'Nazwa modelu obsługi',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_id' => 'Rola',
	'Class:lnkDeliveryModelToContact/Attribute:role_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_name' => 'Nazwa roli',
	'Class:lnkDeliveryModelToContact/Attribute:role_name+' => '',
	'Class:lnkDeliveryModelToContact/Name' => '%1$s / %2$s',
	'Class:lnkDocumentToService' => 'Połączenie Dokument / Usługa',
	'Class:lnkDocumentToService+' => '',
	'Class:lnkDocumentToService/Attribute:document_id' => 'Dokument',
	'Class:lnkDocumentToService/Attribute:document_id+' => '',
	'Class:lnkDocumentToService/Attribute:document_name' => 'Nazwa dokumentu',
	'Class:lnkDocumentToService/Attribute:document_name+' => '',
	'Class:lnkDocumentToService/Attribute:service_id' => 'Usługa',
	'Class:lnkDocumentToService/Attribute:service_id+' => '',
	'Class:lnkDocumentToService/Attribute:service_name' => 'Nazwa usługi',
	'Class:lnkDocumentToService/Attribute:service_name+' => '',
	'Class:lnkDocumentToService/Name' => '%1$s / %2$s',
	'Class:lnkFunctionalCIToProviderContract' => 'Połączenie Konfiguracja / Umowa z dostawcą',
	'Class:lnkFunctionalCIToProviderContract+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id' => 'Konfiguracja',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name' => 'Nazwa konfiguracji',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id' => 'Umowa z dostawcą',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name' => 'Nazwa umowy z dostawcą',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name+' => '',
	'Class:lnkFunctionalCIToProviderContract/Name' => '%1$s / %2$s',
	'Class:lnkSLAToSLT' => 'Połączenie SLA / SLT',
	'Class:lnkSLAToSLT+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_id' => 'Umowa SLA',
	'Class:lnkSLAToSLT/Attribute:sla_id+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_name' => 'Nazwa umowy SLA',
	'Class:lnkSLAToSLT/Attribute:sla_name+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_id' => 'Poziom usług SLT',
	'Class:lnkSLAToSLT/Attribute:slt_id+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_metric' => 'Miara poziomu usług SLT',
	'Class:lnkSLAToSLT/Attribute:slt_metric+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_name' => 'Nazwa poziomu usług SLT',
	'Class:lnkSLAToSLT/Attribute:slt_name+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_request_type' => 'Typ zgłoszenia SLT',
	'Class:lnkSLAToSLT/Attribute:slt_request_type+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_ticket_priority' => 'Priorytet zgłoszeń SLT',
	'Class:lnkSLAToSLT/Attribute:slt_ticket_priority+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_value' => 'Wartość SLT',
	'Class:lnkSLAToSLT/Attribute:slt_value+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_value_unit' => 'Jednostka wartości SLT',
	'Class:lnkSLAToSLT/Attribute:slt_value_unit+' => '',
	'Class:lnkSLAToSLT/Name' => '%1$s / %2$s',
	'Contract:baseinfo' => 'Informacje ogólne',
	'Contract:cost' => 'Informacje o kosztach',
	'Contract:moreinfo' => 'Informacje o umowach',
	'Menu:CustomerContract' => 'Umowy z klientami',
	'Menu:CustomerContract+' => 'Umowy z klientami',
	'Menu:DeliveryModel' => 'Modele obsługi',
	'Menu:DeliveryModel+' => 'Modele obsługi',
	'Menu:ProviderContract' => 'Umowy z dostawcami',
	'Menu:ProviderContract+' => 'Umowy z dostawcami',
	'Menu:SLA' => 'Umowy SLA',
	'Menu:SLA+' => 'Umowy gwarantowanych poziomów usług',
	'Menu:SLT' => 'Poziomy usług SLT',
	'Menu:SLT+' => 'Docelowe poziomy usług',
	'Menu:Service' => 'Usługi',
	'Menu:Service+' => 'Usługi',
	'Menu:Service:Overview' => 'Przegląd',
	'Menu:Service:Overview+' => '',
	'Menu:ServiceElement' => 'Elementy usługi',
	'Menu:ServiceElement+' => 'Elementy usługi',
	'Menu:ServiceFamily' => 'Rodziny usług',
	'Menu:ServiceFamily+' => 'Rodziny usług',
	'Menu:ServiceManagement' => 'Zarządzanie usługami',
	'Menu:ServiceManagement+' => 'Omówienie zarządzania usługami',
	'Menu:ServiceSubcategory' => 'Podkategorie usług',
	'Menu:ServiceSubcategory+' => 'Podkategorie usług',
	'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Umowy według poziomu usług',
	'UI-ServiceManagementMenu-ContractsByStatus' => 'Umowy według statusu',
	'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Umowy kończące się za mniej niż 30 dni',
]);

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/document.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Document
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Gcs::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�(
)google/cloud/dialogflow/v2/document.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto$google/cloud/dialogflow/v2/gcs.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
Document
name (	B�A
display_name (	B�A
	mime_type (	B�AP
knowledge_types (22.google.cloud.dialogflow.v2.Document.KnowledgeTypeB�A
content_uri (	H 
raw_content	 (H 
enable_auto_reload (B�AT
latest_reload_status (21.google.cloud.dialogflow.v2.Document.ReloadStatusB�AI
metadata (22.google.cloud.dialogflow.v2.Document.MetadataEntryB�A\\
ReloadStatus(
time (2.google.protobuf.Timestamp"
status (2.google.rpc.Status/
MetadataEntry
key (	
value (	:8"c
KnowledgeType
KNOWLEDGE_TYPE_UNSPECIFIED 
FAQ
EXTRACTIVE_QA
ARTICLE_SUGGESTION:��A�
"dialogflow.googleapis.com/DocumentGprojects/{project}/knowledgeBases/{knowledge_base}/documents/{document}\\projects/{project}/locations/{location}/knowledgeBases/{knowledge_base}/documents/{document}B
source"N
GetDocumentRequest8
name (	B*�A�A$
"dialogflow.googleapis.com/Document"�
ListDocumentsRequest:
parent (	B*�A�A$"dialogflow.googleapis.com/Document
	page_size (

page_token (	
filter (	"i
ListDocumentsResponse7
	documents (2$.google.cloud.dialogflow.v2.Document
next_page_token (	"�
CreateDocumentRequest:
parent (	B*�A�A$"dialogflow.googleapis.com/Document;
document (2$.google.cloud.dialogflow.v2.DocumentB�A"Q
DeleteDocumentRequest8
name (	B*�A�A$
"dialogflow.googleapis.com/Document"�
UpdateDocumentRequest;
document (2$.google.cloud.dialogflow.v2.DocumentB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
ReloadDocumentRequest8
name (	B*�A�A$
"dialogflow.googleapis.com/Document
content_uri (	B�AH \'
import_gcs_custom_metadata (B�A+
smart_messaging_partial_update (B�AB
source"�
ExportDocumentRequest8
name (	B*�A�A$
"dialogflow.googleapis.com/DocumentE
gcs_destination (2*.google.cloud.dialogflow.v2.GcsDestinationH 
export_full_content (&
smart_messaging_partial_update (B
destination"�
KnowledgeOperationMetadataP
state (2<.google.cloud.dialogflow.v2.KnowledgeOperationMetadata.StateB�A"B
State
STATE_UNSPECIFIED 
PENDING
RUNNING
DONE2�
	Documents�
ListDocuments0.google.cloud.dialogflow.v2.ListDocumentsRequest1.google.cloud.dialogflow.v2.ListDocumentsResponse"�����2/v2/{parent=projects/*/knowledgeBases/*}/documentsZ@>/v2/{parent=projects/*/locations/*/knowledgeBases/*}/documentsZ:8/v2/{parent=projects/*/agent/knowledgeBases/*}/documents�Aparent�
GetDocument..google.cloud.dialogflow.v2.GetDocumentRequest$.google.cloud.dialogflow.v2.Document"�����2/v2/{name=projects/*/knowledgeBases/*/documents/*}Z@>/v2/{name=projects/*/locations/*/knowledgeBases/*/documents/*}Z:8/v2/{name=projects/*/agent/knowledgeBases/*/documents/*}�Aname�
CreateDocument1.google.cloud.dialogflow.v2.CreateDocumentRequest.google.longrunning.Operation"�����"2/v2/{parent=projects/*/knowledgeBases/*}/documents:documentZJ">/v2/{parent=projects/*/locations/*/knowledgeBases/*}/documents:documentZD"8/v2/{parent=projects/*/agent/knowledgeBases/*}/documents:document�Aparent,document�A&
DocumentKnowledgeOperationMetadata�
DeleteDocument1.google.cloud.dialogflow.v2.DeleteDocumentRequest.google.longrunning.Operation"�����*2/v2/{name=projects/*/knowledgeBases/*/documents/*}Z@*>/v2/{name=projects/*/locations/*/knowledgeBases/*/documents/*}Z:*8/v2/{name=projects/*/agent/knowledgeBases/*/documents/*}�Aname�A3
google.protobuf.EmptyKnowledgeOperationMetadata�
UpdateDocument1.google.cloud.dialogflow.v2.UpdateDocumentRequest.google.longrunning.Operation"�����2;/v2/{document.name=projects/*/knowledgeBases/*/documents/*}:documentZS2G/v2/{document.name=projects/*/locations/*/knowledgeBases/*/documents/*}:documentZM2A/v2/{document.name=projects/*/agent/knowledgeBases/*/documents/*}:document�Adocument,update_mask�A&
DocumentKnowledgeOperationMetadata�
ReloadDocument1.google.cloud.dialogflow.v2.ReloadDocumentRequest.google.longrunning.Operation"�����"9/v2/{name=projects/*/knowledgeBases/*/documents/*}:reload:*ZJ"E/v2/{name=projects/*/locations/*/knowledgeBases/*/documents/*}:reload:*ZD"?/v2/{name=projects/*/agent/knowledgeBases/*/documents/*}:reload:*�Aname,content_uri�A&
DocumentKnowledgeOperationMetadata�
ExportDocument1.google.cloud.dialogflow.v2.ExportDocumentRequest.google.longrunning.Operation"�����"9/v2/{name=projects/*/knowledgeBases/*/documents/*}:export:*ZJ"E/v2/{name=projects/*/locations/*/knowledgeBases/*/documents/*}:export:*�A&
DocumentKnowledgeOperationMetadatax�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BDocumentProtoPZDgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2;dialogflow��DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}


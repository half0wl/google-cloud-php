<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Quota;

use UnexpectedValueException;

/**
 * [Output Only] Name of the quota metric.
 *
 * Protobuf type <code>google.cloud.compute.v1.Quota.Metric</code>
 */
class Metric
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_METRIC = 0;</code>
     */
    const UNDEFINED_METRIC = 0;
    /**
     * Generated from protobuf enum <code>A2_CPUS = 153206585;</code>
     */
    const A2_CPUS = 153206585;
    /**
     * Generated from protobuf enum <code>AFFINITY_GROUPS = 108303563;</code>
     */
    const AFFINITY_GROUPS = 108303563;
    /**
     * Generated from protobuf enum <code>AUTOSCALERS = 471248988;</code>
     */
    const AUTOSCALERS = 471248988;
    /**
     * Generated from protobuf enum <code>BACKEND_BUCKETS = 137626846;</code>
     */
    const BACKEND_BUCKETS = 137626846;
    /**
     * Generated from protobuf enum <code>BACKEND_SERVICES = 269623753;</code>
     */
    const BACKEND_SERVICES = 269623753;
    /**
     * Generated from protobuf enum <code>C2D_CPUS = 508182517;</code>
     */
    const C2D_CPUS = 508182517;
    /**
     * Generated from protobuf enum <code>C2_CPUS = 317601211;</code>
     */
    const C2_CPUS = 317601211;
    /**
     * Generated from protobuf enum <code>C3_CPUS = 346230362;</code>
     */
    const C3_CPUS = 346230362;
    /**
     * Generated from protobuf enum <code>COMMITMENTS = 456141790;</code>
     */
    const COMMITMENTS = 456141790;
    /**
     * Generated from protobuf enum <code>COMMITTED_A2_CPUS = 59330902;</code>
     */
    const COMMITTED_A2_CPUS = 59330902;
    /**
     * Generated from protobuf enum <code>COMMITTED_C2D_CPUS = 282390904;</code>
     */
    const COMMITTED_C2D_CPUS = 282390904;
    /**
     * Generated from protobuf enum <code>COMMITTED_C2_CPUS = 223725528;</code>
     */
    const COMMITTED_C2_CPUS = 223725528;
    /**
     * Generated from protobuf enum <code>COMMITTED_C3_CPUS = 252354679;</code>
     */
    const COMMITTED_C3_CPUS = 252354679;
    /**
     * Generated from protobuf enum <code>COMMITTED_CPUS = 292394702;</code>
     */
    const COMMITTED_CPUS = 292394702;
    /**
     * Generated from protobuf enum <code>COMMITTED_E2_CPUS = 388120154;</code>
     */
    const COMMITTED_E2_CPUS = 388120154;
    /**
     * Generated from protobuf enum <code>COMMITTED_LICENSES = 357606869;</code>
     */
    const COMMITTED_LICENSES = 357606869;
    /**
     * Generated from protobuf enum <code>COMMITTED_LOCAL_SSD_TOTAL_GB = 308393480;</code>
     */
    const COMMITTED_LOCAL_SSD_TOTAL_GB = 308393480;
    /**
     * Generated from protobuf enum <code>COMMITTED_MEMORY_OPTIMIZED_CPUS = 489057886;</code>
     */
    const COMMITTED_MEMORY_OPTIMIZED_CPUS = 489057886;
    /**
     * Generated from protobuf enum <code>COMMITTED_N2A_CPUS = 40064304;</code>
     */
    const COMMITTED_N2A_CPUS = 40064304;
    /**
     * Generated from protobuf enum <code>COMMITTED_N2D_CPUS = 125951757;</code>
     */
    const COMMITTED_N2D_CPUS = 125951757;
    /**
     * Generated from protobuf enum <code>COMMITTED_N2_CPUS = 322589603;</code>
     */
    const COMMITTED_N2_CPUS = 322589603;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_A100_GPUS = 375799445;</code>
     */
    const COMMITTED_NVIDIA_A100_GPUS = 375799445;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_K80_GPUS = 3857188;</code>
     */
    const COMMITTED_NVIDIA_K80_GPUS = 3857188;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_P100_GPUS = 107528100;</code>
     */
    const COMMITTED_NVIDIA_P100_GPUS = 107528100;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_P4_GPUS = 347952897;</code>
     */
    const COMMITTED_NVIDIA_P4_GPUS = 347952897;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_T4_GPUS = 139871237;</code>
     */
    const COMMITTED_NVIDIA_T4_GPUS = 139871237;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_V100_GPUS = 219562;</code>
     */
    const COMMITTED_NVIDIA_V100_GPUS = 219562;
    /**
     * Generated from protobuf enum <code>COMMITTED_T2D_CPUS = 382266439;</code>
     */
    const COMMITTED_T2D_CPUS = 382266439;
    /**
     * Guest CPUs
     *
     * Generated from protobuf enum <code>CPUS = 2075595;</code>
     */
    const CPUS = 2075595;
    /**
     * Generated from protobuf enum <code>CPUS_ALL_REGIONS = 470911149;</code>
     */
    const CPUS_ALL_REGIONS = 470911149;
    /**
     * Generated from protobuf enum <code>DISKS_TOTAL_GB = 353520543;</code>
     */
    const DISKS_TOTAL_GB = 353520543;
    /**
     * Generated from protobuf enum <code>E2_CPUS = 481995837;</code>
     */
    const E2_CPUS = 481995837;
    /**
     * Generated from protobuf enum <code>EXTERNAL_NETWORK_LB_FORWARDING_RULES = 374298265;</code>
     */
    const EXTERNAL_NETWORK_LB_FORWARDING_RULES = 374298265;
    /**
     * Generated from protobuf enum <code>EXTERNAL_PROTOCOL_FORWARDING_RULES = 63478888;</code>
     */
    const EXTERNAL_PROTOCOL_FORWARDING_RULES = 63478888;
    /**
     * Generated from protobuf enum <code>EXTERNAL_VPN_GATEWAYS = 272457134;</code>
     */
    const EXTERNAL_VPN_GATEWAYS = 272457134;
    /**
     * Generated from protobuf enum <code>FIREWALLS = 374485843;</code>
     */
    const FIREWALLS = 374485843;
    /**
     * Generated from protobuf enum <code>FORWARDING_RULES = 432668949;</code>
     */
    const FORWARDING_RULES = 432668949;
    /**
     * Generated from protobuf enum <code>GLOBAL_INTERNAL_ADDRESSES = 42738332;</code>
     */
    const GLOBAL_INTERNAL_ADDRESSES = 42738332;
    /**
     * Generated from protobuf enum <code>GPUS_ALL_REGIONS = 39387177;</code>
     */
    const GPUS_ALL_REGIONS = 39387177;
    /**
     * Generated from protobuf enum <code>HEALTH_CHECKS = 289347502;</code>
     */
    const HEALTH_CHECKS = 289347502;
    /**
     * Generated from protobuf enum <code>IMAGES = 15562360;</code>
     */
    const IMAGES = 15562360;
    /**
     * Generated from protobuf enum <code>INSTANCES = 131337822;</code>
     */
    const INSTANCES = 131337822;
    /**
     * Generated from protobuf enum <code>INSTANCE_GROUPS = 355919038;</code>
     */
    const INSTANCE_GROUPS = 355919038;
    /**
     * Generated from protobuf enum <code>INSTANCE_GROUP_MANAGERS = 101798192;</code>
     */
    const INSTANCE_GROUP_MANAGERS = 101798192;
    /**
     * Generated from protobuf enum <code>INSTANCE_TEMPLATES = 226188271;</code>
     */
    const INSTANCE_TEMPLATES = 226188271;
    /**
     * Generated from protobuf enum <code>INTERCONNECTS = 415204741;</code>
     */
    const INTERCONNECTS = 415204741;
    /**
     * Generated from protobuf enum <code>INTERCONNECT_ATTACHMENTS_PER_REGION = 159968086;</code>
     */
    const INTERCONNECT_ATTACHMENTS_PER_REGION = 159968086;
    /**
     * Generated from protobuf enum <code>INTERCONNECT_ATTACHMENTS_TOTAL_MBPS = 425090419;</code>
     */
    const INTERCONNECT_ATTACHMENTS_TOTAL_MBPS = 425090419;
    /**
     * Generated from protobuf enum <code>INTERCONNECT_TOTAL_GBPS = 285341866;</code>
     */
    const INTERCONNECT_TOTAL_GBPS = 285341866;
    /**
     * Generated from protobuf enum <code>INTERNAL_ADDRESSES = 197899392;</code>
     */
    const INTERNAL_ADDRESSES = 197899392;
    /**
     * Generated from protobuf enum <code>INTERNAL_TRAFFIC_DIRECTOR_FORWARDING_RULES = 266433668;</code>
     */
    const INTERNAL_TRAFFIC_DIRECTOR_FORWARDING_RULES = 266433668;
    /**
     * Generated from protobuf enum <code>IN_PLACE_SNAPSHOTS = 151359133;</code>
     */
    const IN_PLACE_SNAPSHOTS = 151359133;
    /**
     * Generated from protobuf enum <code>IN_USE_ADDRESSES = 402125072;</code>
     */
    const IN_USE_ADDRESSES = 402125072;
    /**
     * Generated from protobuf enum <code>IN_USE_BACKUP_SCHEDULES = 32786705;</code>
     */
    const IN_USE_BACKUP_SCHEDULES = 32786705;
    /**
     * Generated from protobuf enum <code>IN_USE_SNAPSHOT_SCHEDULES = 462104083;</code>
     */
    const IN_USE_SNAPSHOT_SCHEDULES = 462104083;
    /**
     * Generated from protobuf enum <code>LOCAL_SSD_TOTAL_GB = 330878021;</code>
     */
    const LOCAL_SSD_TOTAL_GB = 330878021;
    /**
     * Generated from protobuf enum <code>M1_CPUS = 37203366;</code>
     */
    const M1_CPUS = 37203366;
    /**
     * Generated from protobuf enum <code>M2_CPUS = 65832517;</code>
     */
    const M2_CPUS = 65832517;
    /**
     * Generated from protobuf enum <code>MACHINE_IMAGES = 446986640;</code>
     */
    const MACHINE_IMAGES = 446986640;
    /**
     * Generated from protobuf enum <code>N2A_CPUS = 265855917;</code>
     */
    const N2A_CPUS = 265855917;
    /**
     * Generated from protobuf enum <code>N2D_CPUS = 351743370;</code>
     */
    const N2D_CPUS = 351743370;
    /**
     * Generated from protobuf enum <code>N2_CPUS = 416465286;</code>
     */
    const N2_CPUS = 416465286;
    /**
     * Generated from protobuf enum <code>NETWORKS = 485481477;</code>
     */
    const NETWORKS = 485481477;
    /**
     * Generated from protobuf enum <code>NETWORK_ENDPOINT_GROUPS = 102144909;</code>
     */
    const NETWORK_ENDPOINT_GROUPS = 102144909;
    /**
     * Generated from protobuf enum <code>NETWORK_FIREWALL_POLICIES = 101117374;</code>
     */
    const NETWORK_FIREWALL_POLICIES = 101117374;
    /**
     * Generated from protobuf enum <code>NODE_GROUPS = 24624817;</code>
     */
    const NODE_GROUPS = 24624817;
    /**
     * Generated from protobuf enum <code>NODE_TEMPLATES = 474896668;</code>
     */
    const NODE_TEMPLATES = 474896668;
    /**
     * Generated from protobuf enum <code>NVIDIA_A100_GPUS = 504872978;</code>
     */
    const NVIDIA_A100_GPUS = 504872978;
    /**
     * Generated from protobuf enum <code>NVIDIA_K80_GPUS = 163886599;</code>
     */
    const NVIDIA_K80_GPUS = 163886599;
    /**
     * Generated from protobuf enum <code>NVIDIA_P100_GPUS = 236601633;</code>
     */
    const NVIDIA_P100_GPUS = 236601633;
    /**
     * Generated from protobuf enum <code>NVIDIA_P100_VWS_GPUS = 213970574;</code>
     */
    const NVIDIA_P100_VWS_GPUS = 213970574;
    /**
     * Generated from protobuf enum <code>NVIDIA_P4_GPUS = 283841470;</code>
     */
    const NVIDIA_P4_GPUS = 283841470;
    /**
     * Generated from protobuf enum <code>NVIDIA_P4_VWS_GPUS = 528296619;</code>
     */
    const NVIDIA_P4_VWS_GPUS = 528296619;
    /**
     * Generated from protobuf enum <code>NVIDIA_T4_GPUS = 75759810;</code>
     */
    const NVIDIA_T4_GPUS = 75759810;
    /**
     * Generated from protobuf enum <code>NVIDIA_T4_VWS_GPUS = 319813039;</code>
     */
    const NVIDIA_T4_VWS_GPUS = 319813039;
    /**
     * Generated from protobuf enum <code>NVIDIA_V100_GPUS = 129293095;</code>
     */
    const NVIDIA_V100_GPUS = 129293095;
    /**
     * Generated from protobuf enum <code>PACKET_MIRRORINGS = 15578407;</code>
     */
    const PACKET_MIRRORINGS = 15578407;
    /**
     * Generated from protobuf enum <code>PD_EXTREME_TOTAL_PROVISIONED_IOPS = 69593965;</code>
     */
    const PD_EXTREME_TOTAL_PROVISIONED_IOPS = 69593965;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_CPUS = 251184841;</code>
     */
    const PREEMPTIBLE_CPUS = 251184841;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_LOCAL_SSD_GB = 260819336;</code>
     */
    const PREEMPTIBLE_LOCAL_SSD_GB = 260819336;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_A100_GPUS = 68832784;</code>
     */
    const PREEMPTIBLE_NVIDIA_A100_GPUS = 68832784;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_K80_GPUS = 374960201;</code>
     */
    const PREEMPTIBLE_NVIDIA_K80_GPUS = 374960201;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_P100_GPUS = 337432351;</code>
     */
    const PREEMPTIBLE_NVIDIA_P100_GPUS = 337432351;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_P100_VWS_GPUS = 313544076;</code>
     */
    const PREEMPTIBLE_NVIDIA_P100_VWS_GPUS = 313544076;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_P4_GPUS = 429197628;</code>
     */
    const PREEMPTIBLE_NVIDIA_P4_GPUS = 429197628;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_P4_VWS_GPUS = 252981545;</code>
     */
    const PREEMPTIBLE_NVIDIA_P4_VWS_GPUS = 252981545;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_T4_GPUS = 221115968;</code>
     */
    const PREEMPTIBLE_NVIDIA_T4_GPUS = 221115968;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_T4_VWS_GPUS = 44497965;</code>
     */
    const PREEMPTIBLE_NVIDIA_T4_VWS_GPUS = 44497965;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_V100_GPUS = 230123813;</code>
     */
    const PREEMPTIBLE_NVIDIA_V100_GPUS = 230123813;
    /**
     * Generated from protobuf enum <code>PSC_ILB_CONSUMER_FORWARDING_RULES_PER_PRODUCER_NETWORK = 231164291;</code>
     */
    const PSC_ILB_CONSUMER_FORWARDING_RULES_PER_PRODUCER_NETWORK = 231164291;
    /**
     * Generated from protobuf enum <code>PSC_INTERNAL_LB_FORWARDING_RULES = 169005435;</code>
     */
    const PSC_INTERNAL_LB_FORWARDING_RULES = 169005435;
    /**
     * Generated from protobuf enum <code>PUBLIC_ADVERTISED_PREFIXES = 471371980;</code>
     */
    const PUBLIC_ADVERTISED_PREFIXES = 471371980;
    /**
     * Generated from protobuf enum <code>PUBLIC_DELEGATED_PREFIXES = 532465974;</code>
     */
    const PUBLIC_DELEGATED_PREFIXES = 532465974;
    /**
     * Generated from protobuf enum <code>REGIONAL_AUTOSCALERS = 29363772;</code>
     */
    const REGIONAL_AUTOSCALERS = 29363772;
    /**
     * Generated from protobuf enum <code>REGIONAL_INSTANCE_GROUP_MANAGERS = 37543696;</code>
     */
    const REGIONAL_INSTANCE_GROUP_MANAGERS = 37543696;
    /**
     * Generated from protobuf enum <code>RESERVATIONS = 32644647;</code>
     */
    const RESERVATIONS = 32644647;
    /**
     * Generated from protobuf enum <code>RESOURCE_POLICIES = 83955297;</code>
     */
    const RESOURCE_POLICIES = 83955297;
    /**
     * Generated from protobuf enum <code>ROUTERS = 493018666;</code>
     */
    const ROUTERS = 493018666;
    /**
     * Generated from protobuf enum <code>ROUTES = 275680074;</code>
     */
    const ROUTES = 275680074;
    /**
     * Generated from protobuf enum <code>SECURITY_POLICIES = 189518703;</code>
     */
    const SECURITY_POLICIES = 189518703;
    /**
     * Generated from protobuf enum <code>SECURITY_POLICIES_PER_REGION = 249041734;</code>
     */
    const SECURITY_POLICIES_PER_REGION = 249041734;
    /**
     * Generated from protobuf enum <code>SECURITY_POLICY_CEVAL_RULES = 470815689;</code>
     */
    const SECURITY_POLICY_CEVAL_RULES = 470815689;
    /**
     * Generated from protobuf enum <code>SECURITY_POLICY_RULES = 203549225;</code>
     */
    const SECURITY_POLICY_RULES = 203549225;
    /**
     * Generated from protobuf enum <code>SECURITY_POLICY_RULES_PER_REGION = 126510156;</code>
     */
    const SECURITY_POLICY_RULES_PER_REGION = 126510156;
    /**
     * Generated from protobuf enum <code>SERVICE_ATTACHMENTS = 471521510;</code>
     */
    const SERVICE_ATTACHMENTS = 471521510;
    /**
     * The total number of snapshots allowed for a single project.
     *
     * Generated from protobuf enum <code>SNAPSHOTS = 343405327;</code>
     */
    const SNAPSHOTS = 343405327;
    /**
     * Generated from protobuf enum <code>SSD_TOTAL_GB = 161732561;</code>
     */
    const SSD_TOTAL_GB = 161732561;
    /**
     * Generated from protobuf enum <code>SSL_CERTIFICATES = 378372399;</code>
     */
    const SSL_CERTIFICATES = 378372399;
    /**
     * Generated from protobuf enum <code>STATIC_ADDRESSES = 93624049;</code>
     */
    const STATIC_ADDRESSES = 93624049;
    /**
     * Generated from protobuf enum <code>STATIC_BYOIP_ADDRESSES = 275809649;</code>
     */
    const STATIC_BYOIP_ADDRESSES = 275809649;
    /**
     * Generated from protobuf enum <code>SUBNETWORKS = 421330469;</code>
     */
    const SUBNETWORKS = 421330469;
    /**
     * Generated from protobuf enum <code>T2D_CPUS = 71187140;</code>
     */
    const T2D_CPUS = 71187140;
    /**
     * Generated from protobuf enum <code>TARGET_HTTPS_PROXIES = 219522506;</code>
     */
    const TARGET_HTTPS_PROXIES = 219522506;
    /**
     * Generated from protobuf enum <code>TARGET_HTTP_PROXIES = 164117155;</code>
     */
    const TARGET_HTTP_PROXIES = 164117155;
    /**
     * Generated from protobuf enum <code>TARGET_INSTANCES = 284519728;</code>
     */
    const TARGET_INSTANCES = 284519728;
    /**
     * Generated from protobuf enum <code>TARGET_POOLS = 348261257;</code>
     */
    const TARGET_POOLS = 348261257;
    /**
     * Generated from protobuf enum <code>TARGET_SSL_PROXIES = 159216235;</code>
     */
    const TARGET_SSL_PROXIES = 159216235;
    /**
     * Generated from protobuf enum <code>TARGET_TCP_PROXIES = 182243136;</code>
     */
    const TARGET_TCP_PROXIES = 182243136;
    /**
     * Generated from protobuf enum <code>TARGET_VPN_GATEWAYS = 75029928;</code>
     */
    const TARGET_VPN_GATEWAYS = 75029928;
    /**
     * Generated from protobuf enum <code>URL_MAPS = 378660743;</code>
     */
    const URL_MAPS = 378660743;
    /**
     * Generated from protobuf enum <code>VPN_GATEWAYS = 35620282;</code>
     */
    const VPN_GATEWAYS = 35620282;
    /**
     * Generated from protobuf enum <code>VPN_TUNNELS = 104327296;</code>
     */
    const VPN_TUNNELS = 104327296;
    /**
     * Generated from protobuf enum <code>XPN_SERVICE_PROJECTS = 95191981;</code>
     */
    const XPN_SERVICE_PROJECTS = 95191981;

    private static $valueToName = [
        self::UNDEFINED_METRIC => 'UNDEFINED_METRIC',
        self::A2_CPUS => 'A2_CPUS',
        self::AFFINITY_GROUPS => 'AFFINITY_GROUPS',
        self::AUTOSCALERS => 'AUTOSCALERS',
        self::BACKEND_BUCKETS => 'BACKEND_BUCKETS',
        self::BACKEND_SERVICES => 'BACKEND_SERVICES',
        self::C2D_CPUS => 'C2D_CPUS',
        self::C2_CPUS => 'C2_CPUS',
        self::C3_CPUS => 'C3_CPUS',
        self::COMMITMENTS => 'COMMITMENTS',
        self::COMMITTED_A2_CPUS => 'COMMITTED_A2_CPUS',
        self::COMMITTED_C2D_CPUS => 'COMMITTED_C2D_CPUS',
        self::COMMITTED_C2_CPUS => 'COMMITTED_C2_CPUS',
        self::COMMITTED_C3_CPUS => 'COMMITTED_C3_CPUS',
        self::COMMITTED_CPUS => 'COMMITTED_CPUS',
        self::COMMITTED_E2_CPUS => 'COMMITTED_E2_CPUS',
        self::COMMITTED_LICENSES => 'COMMITTED_LICENSES',
        self::COMMITTED_LOCAL_SSD_TOTAL_GB => 'COMMITTED_LOCAL_SSD_TOTAL_GB',
        self::COMMITTED_MEMORY_OPTIMIZED_CPUS => 'COMMITTED_MEMORY_OPTIMIZED_CPUS',
        self::COMMITTED_N2A_CPUS => 'COMMITTED_N2A_CPUS',
        self::COMMITTED_N2D_CPUS => 'COMMITTED_N2D_CPUS',
        self::COMMITTED_N2_CPUS => 'COMMITTED_N2_CPUS',
        self::COMMITTED_NVIDIA_A100_GPUS => 'COMMITTED_NVIDIA_A100_GPUS',
        self::COMMITTED_NVIDIA_K80_GPUS => 'COMMITTED_NVIDIA_K80_GPUS',
        self::COMMITTED_NVIDIA_P100_GPUS => 'COMMITTED_NVIDIA_P100_GPUS',
        self::COMMITTED_NVIDIA_P4_GPUS => 'COMMITTED_NVIDIA_P4_GPUS',
        self::COMMITTED_NVIDIA_T4_GPUS => 'COMMITTED_NVIDIA_T4_GPUS',
        self::COMMITTED_NVIDIA_V100_GPUS => 'COMMITTED_NVIDIA_V100_GPUS',
        self::COMMITTED_T2D_CPUS => 'COMMITTED_T2D_CPUS',
        self::CPUS => 'CPUS',
        self::CPUS_ALL_REGIONS => 'CPUS_ALL_REGIONS',
        self::DISKS_TOTAL_GB => 'DISKS_TOTAL_GB',
        self::E2_CPUS => 'E2_CPUS',
        self::EXTERNAL_NETWORK_LB_FORWARDING_RULES => 'EXTERNAL_NETWORK_LB_FORWARDING_RULES',
        self::EXTERNAL_PROTOCOL_FORWARDING_RULES => 'EXTERNAL_PROTOCOL_FORWARDING_RULES',
        self::EXTERNAL_VPN_GATEWAYS => 'EXTERNAL_VPN_GATEWAYS',
        self::FIREWALLS => 'FIREWALLS',
        self::FORWARDING_RULES => 'FORWARDING_RULES',
        self::GLOBAL_INTERNAL_ADDRESSES => 'GLOBAL_INTERNAL_ADDRESSES',
        self::GPUS_ALL_REGIONS => 'GPUS_ALL_REGIONS',
        self::HEALTH_CHECKS => 'HEALTH_CHECKS',
        self::IMAGES => 'IMAGES',
        self::INSTANCES => 'INSTANCES',
        self::INSTANCE_GROUPS => 'INSTANCE_GROUPS',
        self::INSTANCE_GROUP_MANAGERS => 'INSTANCE_GROUP_MANAGERS',
        self::INSTANCE_TEMPLATES => 'INSTANCE_TEMPLATES',
        self::INTERCONNECTS => 'INTERCONNECTS',
        self::INTERCONNECT_ATTACHMENTS_PER_REGION => 'INTERCONNECT_ATTACHMENTS_PER_REGION',
        self::INTERCONNECT_ATTACHMENTS_TOTAL_MBPS => 'INTERCONNECT_ATTACHMENTS_TOTAL_MBPS',
        self::INTERCONNECT_TOTAL_GBPS => 'INTERCONNECT_TOTAL_GBPS',
        self::INTERNAL_ADDRESSES => 'INTERNAL_ADDRESSES',
        self::INTERNAL_TRAFFIC_DIRECTOR_FORWARDING_RULES => 'INTERNAL_TRAFFIC_DIRECTOR_FORWARDING_RULES',
        self::IN_PLACE_SNAPSHOTS => 'IN_PLACE_SNAPSHOTS',
        self::IN_USE_ADDRESSES => 'IN_USE_ADDRESSES',
        self::IN_USE_BACKUP_SCHEDULES => 'IN_USE_BACKUP_SCHEDULES',
        self::IN_USE_SNAPSHOT_SCHEDULES => 'IN_USE_SNAPSHOT_SCHEDULES',
        self::LOCAL_SSD_TOTAL_GB => 'LOCAL_SSD_TOTAL_GB',
        self::M1_CPUS => 'M1_CPUS',
        self::M2_CPUS => 'M2_CPUS',
        self::MACHINE_IMAGES => 'MACHINE_IMAGES',
        self::N2A_CPUS => 'N2A_CPUS',
        self::N2D_CPUS => 'N2D_CPUS',
        self::N2_CPUS => 'N2_CPUS',
        self::NETWORKS => 'NETWORKS',
        self::NETWORK_ENDPOINT_GROUPS => 'NETWORK_ENDPOINT_GROUPS',
        self::NETWORK_FIREWALL_POLICIES => 'NETWORK_FIREWALL_POLICIES',
        self::NODE_GROUPS => 'NODE_GROUPS',
        self::NODE_TEMPLATES => 'NODE_TEMPLATES',
        self::NVIDIA_A100_GPUS => 'NVIDIA_A100_GPUS',
        self::NVIDIA_K80_GPUS => 'NVIDIA_K80_GPUS',
        self::NVIDIA_P100_GPUS => 'NVIDIA_P100_GPUS',
        self::NVIDIA_P100_VWS_GPUS => 'NVIDIA_P100_VWS_GPUS',
        self::NVIDIA_P4_GPUS => 'NVIDIA_P4_GPUS',
        self::NVIDIA_P4_VWS_GPUS => 'NVIDIA_P4_VWS_GPUS',
        self::NVIDIA_T4_GPUS => 'NVIDIA_T4_GPUS',
        self::NVIDIA_T4_VWS_GPUS => 'NVIDIA_T4_VWS_GPUS',
        self::NVIDIA_V100_GPUS => 'NVIDIA_V100_GPUS',
        self::PACKET_MIRRORINGS => 'PACKET_MIRRORINGS',
        self::PD_EXTREME_TOTAL_PROVISIONED_IOPS => 'PD_EXTREME_TOTAL_PROVISIONED_IOPS',
        self::PREEMPTIBLE_CPUS => 'PREEMPTIBLE_CPUS',
        self::PREEMPTIBLE_LOCAL_SSD_GB => 'PREEMPTIBLE_LOCAL_SSD_GB',
        self::PREEMPTIBLE_NVIDIA_A100_GPUS => 'PREEMPTIBLE_NVIDIA_A100_GPUS',
        self::PREEMPTIBLE_NVIDIA_K80_GPUS => 'PREEMPTIBLE_NVIDIA_K80_GPUS',
        self::PREEMPTIBLE_NVIDIA_P100_GPUS => 'PREEMPTIBLE_NVIDIA_P100_GPUS',
        self::PREEMPTIBLE_NVIDIA_P100_VWS_GPUS => 'PREEMPTIBLE_NVIDIA_P100_VWS_GPUS',
        self::PREEMPTIBLE_NVIDIA_P4_GPUS => 'PREEMPTIBLE_NVIDIA_P4_GPUS',
        self::PREEMPTIBLE_NVIDIA_P4_VWS_GPUS => 'PREEMPTIBLE_NVIDIA_P4_VWS_GPUS',
        self::PREEMPTIBLE_NVIDIA_T4_GPUS => 'PREEMPTIBLE_NVIDIA_T4_GPUS',
        self::PREEMPTIBLE_NVIDIA_T4_VWS_GPUS => 'PREEMPTIBLE_NVIDIA_T4_VWS_GPUS',
        self::PREEMPTIBLE_NVIDIA_V100_GPUS => 'PREEMPTIBLE_NVIDIA_V100_GPUS',
        self::PSC_ILB_CONSUMER_FORWARDING_RULES_PER_PRODUCER_NETWORK => 'PSC_ILB_CONSUMER_FORWARDING_RULES_PER_PRODUCER_NETWORK',
        self::PSC_INTERNAL_LB_FORWARDING_RULES => 'PSC_INTERNAL_LB_FORWARDING_RULES',
        self::PUBLIC_ADVERTISED_PREFIXES => 'PUBLIC_ADVERTISED_PREFIXES',
        self::PUBLIC_DELEGATED_PREFIXES => 'PUBLIC_DELEGATED_PREFIXES',
        self::REGIONAL_AUTOSCALERS => 'REGIONAL_AUTOSCALERS',
        self::REGIONAL_INSTANCE_GROUP_MANAGERS => 'REGIONAL_INSTANCE_GROUP_MANAGERS',
        self::RESERVATIONS => 'RESERVATIONS',
        self::RESOURCE_POLICIES => 'RESOURCE_POLICIES',
        self::ROUTERS => 'ROUTERS',
        self::ROUTES => 'ROUTES',
        self::SECURITY_POLICIES => 'SECURITY_POLICIES',
        self::SECURITY_POLICIES_PER_REGION => 'SECURITY_POLICIES_PER_REGION',
        self::SECURITY_POLICY_CEVAL_RULES => 'SECURITY_POLICY_CEVAL_RULES',
        self::SECURITY_POLICY_RULES => 'SECURITY_POLICY_RULES',
        self::SECURITY_POLICY_RULES_PER_REGION => 'SECURITY_POLICY_RULES_PER_REGION',
        self::SERVICE_ATTACHMENTS => 'SERVICE_ATTACHMENTS',
        self::SNAPSHOTS => 'SNAPSHOTS',
        self::SSD_TOTAL_GB => 'SSD_TOTAL_GB',
        self::SSL_CERTIFICATES => 'SSL_CERTIFICATES',
        self::STATIC_ADDRESSES => 'STATIC_ADDRESSES',
        self::STATIC_BYOIP_ADDRESSES => 'STATIC_BYOIP_ADDRESSES',
        self::SUBNETWORKS => 'SUBNETWORKS',
        self::T2D_CPUS => 'T2D_CPUS',
        self::TARGET_HTTPS_PROXIES => 'TARGET_HTTPS_PROXIES',
        self::TARGET_HTTP_PROXIES => 'TARGET_HTTP_PROXIES',
        self::TARGET_INSTANCES => 'TARGET_INSTANCES',
        self::TARGET_POOLS => 'TARGET_POOLS',
        self::TARGET_SSL_PROXIES => 'TARGET_SSL_PROXIES',
        self::TARGET_TCP_PROXIES => 'TARGET_TCP_PROXIES',
        self::TARGET_VPN_GATEWAYS => 'TARGET_VPN_GATEWAYS',
        self::URL_MAPS => 'URL_MAPS',
        self::VPN_GATEWAYS => 'VPN_GATEWAYS',
        self::VPN_TUNNELS => 'VPN_TUNNELS',
        self::XPN_SERVICE_PROJECTS => 'XPN_SERVICE_PROJECTS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Metric::class, \Google\Cloud\Compute\V1\Quota_Metric::class);


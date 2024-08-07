<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/gce_setup.proto

namespace GPBMetadata\Google\Cloud\Notebooks\V2;

class GceSetup
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/cloud/notebooks/v2/gce_setup.protogoogle.cloud.notebooks.v2"�
NetworkInterface
network (	B�A
subnet (	B�AJ
nic_type (23.google.cloud.notebooks.v2.NetworkInterface.NicTypeB�A">
NicType
NIC_TYPE_UNSPECIFIED 

VIRTIO_NET	
GVNIC"T
VmImage
project (	B�A
name (	B�AH 
family (	B�AH B
image";
ContainerImage

repository (	B�A
tag (	B�A"�
AcceleratorConfigO
type (2<.google.cloud.notebooks.v2.AcceleratorConfig.AcceleratorTypeB�A

core_count (B�A"�
AcceleratorType 
ACCELERATOR_TYPE_UNSPECIFIED 
NVIDIA_TESLA_P100
NVIDIA_TESLA_V100
NVIDIA_TESLA_P4
NVIDIA_TESLA_T4
NVIDIA_TESLA_A100
NVIDIA_A100_80GB
	NVIDIA_L4
NVIDIA_TESLA_T4_VWS
NVIDIA_TESLA_P100_VWS	
NVIDIA_TESLA_P4_VWS
"}
ShieldedInstanceConfig
enable_secure_boot (B�A
enable_vtpm (B�A(
enable_integrity_monitoring (B�A"V
GPUDriverConfig
enable_gpu_driver (B�A#
custom_gpu_driver_path (	B�A"�
DataDisk
disk_size_gb (B�A>
	disk_type (2#.google.cloud.notebooks.v2.DiskTypeB�A�AJ
disk_encryption (2).google.cloud.notebooks.v2.DiskEncryptionB�A�A
kms_key (	B�A�A"�
BootDisk
disk_size_gb (B�A;
	disk_type (2#.google.cloud.notebooks.v2.DiskTypeB�AJ
disk_encryption (2).google.cloud.notebooks.v2.DiskEncryptionB�A�A
kms_key (	B�A�A"9
ServiceAccount
email (	B�A
scopes (	B�A"�
GceSetup
machine_type (	B�AN
accelerator_configs (2,.google.cloud.notebooks.v2.AcceleratorConfigB�AH
service_accounts (2).google.cloud.notebooks.v2.ServiceAccountB�A;
vm_image (2".google.cloud.notebooks.v2.VmImageB�AH I
container_image (2).google.cloud.notebooks.v2.ContainerImageB�AH ;
	boot_disk (2#.google.cloud.notebooks.v2.BootDiskB�A<

data_disks (2#.google.cloud.notebooks.v2.DataDiskB�AX
shielded_instance_config (21.google.cloud.notebooks.v2.ShieldedInstanceConfigB�AL
network_interfaces	 (2+.google.cloud.notebooks.v2.NetworkInterfaceB�A
disable_public_ip
 (B�A
tags (	B�AH
metadata (21.google.cloud.notebooks.v2.GceSetup.MetadataEntryB�A!
enable_ip_forwarding (B�AJ
gpu_driver_config (2*.google.cloud.notebooks.v2.GPUDriverConfigB�A/
MetadataEntry
key (	
value (	:8B
image*E
DiskEncryption
DISK_ENCRYPTION_UNSPECIFIED 
GMEK
CMEK*c
DiskType
DISK_TYPE_UNSPECIFIED 
PD_STANDARD

PD_SSD
PD_BALANCED

PD_EXTREMEB�
com.google.cloud.notebooks.v2BGceSetupProtoPZ;cloud.google.com/go/notebooks/apiv2/notebookspb;notebookspb�Google.Cloud.Notebooks.V2�Google\\Cloud\\Notebooks\\V2�Google::Cloud::Notebooks::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}


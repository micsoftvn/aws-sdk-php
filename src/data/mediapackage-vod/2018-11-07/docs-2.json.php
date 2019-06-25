<?php
// This file was auto-generated from sdk-root/src/data/mediapackage-vod/2018-11-07/docs-2.json
return [ 'version' => '2.0', 'service' => 'AWS Elemental MediaPackage VOD', 'operations' => [ 'CreateAsset' => 'Creates a new MediaPackage VOD Asset resource.', 'CreatePackagingConfiguration' => 'Creates a new MediaPackage VOD PackagingConfiguration resource.', 'CreatePackagingGroup' => 'Creates a new MediaPackage VOD PackagingGroup resource.', 'DeleteAsset' => 'Deletes an existing MediaPackage VOD Asset resource.', 'DeletePackagingConfiguration' => 'Deletes a MediaPackage VOD PackagingConfiguration resource.', 'DeletePackagingGroup' => 'Deletes a MediaPackage VOD PackagingGroup resource.', 'DescribeAsset' => 'Returns a description of a MediaPackage VOD Asset resource.', 'DescribePackagingConfiguration' => 'Returns a description of a MediaPackage VOD PackagingConfiguration resource.', 'DescribePackagingGroup' => 'Returns a description of a MediaPackage VOD PackagingGroup resource.', 'ListAssets' => 'Returns a collection of MediaPackage VOD Asset resources.', 'ListPackagingConfigurations' => 'Returns a collection of MediaPackage VOD PackagingConfiguration resources.', 'ListPackagingGroups' => 'Returns a collection of MediaPackage VOD PackagingGroup resources.', ], 'shapes' => [ 'AdMarkers' => [ 'base' => NULL, 'refs' => [ 'HlsManifest$AdMarkers' => 'This setting controls how ad markers are included in the packaged OriginEndpoint."NONE" will omit all SCTE-35 ad markers from the output."PASSTHROUGH" causes the manifest to contain a copy of the SCTE-35 admarkers (comments) taken directly from the input HTTP Live Streaming (HLS) manifest."SCTE35_ENHANCED" generates ad markers and blackout tags based on SCTE-35messages in the input source.', ], ], 'Asset' => [ 'base' => 'A MediaPackage VOD Asset resource.', 'refs' => [], ], 'AssetCreateParameters' => [ 'base' => 'Parameters used to create a MediaPackage VOD Asset.', 'refs' => [], ], 'AssetList' => [ 'base' => 'A collection of MediaPackage VOD Asset resources.', 'refs' => [], ], 'AssetShallow' => [ 'base' => 'A MediaPackage VOD Asset resource.', 'refs' => [ '__listOfAssetShallow$member' => NULL, ], ], 'CmafEncryption' => [ 'base' => 'A CMAF encryption configuration.', 'refs' => [ 'CmafPackage$Encryption' => NULL, ], ], 'CmafPackage' => [ 'base' => 'A CMAF packaging configuration.', 'refs' => [ 'PackagingConfiguration$CmafPackage' => NULL, 'PackagingConfigurationCreateParameters$CmafPackage' => NULL, ], ], 'DashEncryption' => [ 'base' => 'A Dynamic Adaptive Streaming over HTTP (DASH) encryption configuration.', 'refs' => [ 'DashPackage$Encryption' => NULL, ], ], 'DashManifest' => [ 'base' => 'A DASH manifest configuration.', 'refs' => [ '__listOfDashManifest$member' => NULL, ], ], 'DashPackage' => [ 'base' => 'A Dynamic Adaptive Streaming over HTTP (DASH) packaging configuration.', 'refs' => [ 'PackagingConfiguration$DashPackage' => NULL, 'PackagingConfigurationCreateParameters$DashPackage' => NULL, ], ], 'EgressEndpoint' => [ 'base' => 'The endpoint URL used to access an Asset using one PackagingConfiguration.', 'refs' => [ '__listOfEgressEndpoint$member' => NULL, ], ], 'EncryptionMethod' => [ 'base' => NULL, 'refs' => [ 'HlsEncryption$EncryptionMethod' => 'The encryption method to use.', ], ], 'HlsEncryption' => [ 'base' => 'An HTTP Live Streaming (HLS) encryption configuration.', 'refs' => [ 'HlsPackage$Encryption' => NULL, ], ], 'HlsManifest' => [ 'base' => 'An HTTP Live Streaming (HLS) manifest configuration.', 'refs' => [ '__listOfHlsManifest$member' => NULL, ], ], 'HlsPackage' => [ 'base' => 'An HTTP Live Streaming (HLS) packaging configuration.', 'refs' => [ 'PackagingConfiguration$HlsPackage' => NULL, 'PackagingConfigurationCreateParameters$HlsPackage' => NULL, ], ], 'MssEncryption' => [ 'base' => 'A Microsoft Smooth Streaming (MSS) encryption configuration.', 'refs' => [ 'MssPackage$Encryption' => NULL, ], ], 'MssManifest' => [ 'base' => 'A Microsoft Smooth Streaming (MSS) manifest configuration.', 'refs' => [ '__listOfMssManifest$member' => NULL, ], ], 'MssPackage' => [ 'base' => 'A Microsoft Smooth Streaming (MSS) PackagingConfiguration.', 'refs' => [ 'PackagingConfiguration$MssPackage' => NULL, 'PackagingConfigurationCreateParameters$MssPackage' => NULL, ], ], 'PackagingConfiguration' => [ 'base' => 'A MediaPackage VOD PackagingConfiguration resource.', 'refs' => [ '__listOfPackagingConfiguration$member' => NULL, ], ], 'PackagingConfigurationCreateParameters' => [ 'base' => 'Parameters used to create a new MediaPackage VOD PackagingConfiguration resource.', 'refs' => [], ], 'PackagingConfigurationList' => [ 'base' => 'A collection of MediaPackage VOD PackagingConfiguration resources.', 'refs' => [], ], 'PackagingGroup' => [ 'base' => 'A MediaPackage VOD PackagingGroup resource.', 'refs' => [ '__listOfPackagingGroup$member' => NULL, ], ], 'PackagingGroupCreateParameters' => [ 'base' => 'Parameters used to create a new MediaPackage VOD PackagingGroup resource.', 'refs' => [], ], 'PackagingGroupList' => [ 'base' => 'A collection of MediaPackage VOD PackagingGroup resources.', 'refs' => [], ], 'Profile' => [ 'base' => NULL, 'refs' => [ 'DashManifest$Profile' => 'The Dynamic Adaptive Streaming over HTTP (DASH) profile type. When set to "HBBTV_1_5", HbbTV 1.5 compliant output is enabled.', ], ], 'SpekeKeyProvider' => [ 'base' => 'A configuration for accessing an external Secure Packager and Encoder Key Exchange (SPEKE) service that will provide encryption keys.', 'refs' => [ 'CmafEncryption$SpekeKeyProvider' => NULL, 'DashEncryption$SpekeKeyProvider' => NULL, 'HlsEncryption$SpekeKeyProvider' => NULL, 'MssEncryption$SpekeKeyProvider' => NULL, ], ], 'StreamOrder' => [ 'base' => NULL, 'refs' => [ 'StreamSelection$StreamOrder' => 'A directive that determines the order of streams in the output.', ], ], 'StreamSelection' => [ 'base' => 'A StreamSelection configuration.', 'refs' => [ 'DashManifest$StreamSelection' => NULL, 'HlsManifest$StreamSelection' => NULL, 'MssManifest$StreamSelection' => NULL, ], ], '__boolean' => [ 'base' => NULL, 'refs' => [ 'HlsManifest$IncludeIframeOnlyStream' => 'When enabled, an I-Frame only stream will be included in the output.', 'HlsManifest$RepeatExtXKey' => 'When enabled, the EXT-X-KEY tag will be repeated in output manifests.', 'HlsPackage$UseAudioRenditionGroup' => 'When enabled, audio streams will be placed in rendition groups in the output.', ], ], '__integer' => [ 'base' => NULL, 'refs' => [ 'CmafPackage$SegmentDurationSeconds' => 'Duration (in seconds) of each fragment. Actual fragments will berounded to the nearest multiple of the source fragment duration.', 'DashManifest$MinBufferTimeSeconds' => 'Minimum duration (in seconds) that a player will buffer media before starting the presentation.', 'DashPackage$SegmentDurationSeconds' => 'Duration (in seconds) of each segment. Actual segments will berounded to the nearest multiple of the source segment duration.', 'HlsManifest$ProgramDateTimeIntervalSeconds' => 'The interval (in seconds) between each EXT-X-PROGRAM-DATE-TIME taginserted into manifests. Additionally, when an interval is specifiedID3Timed Metadata messages will be generated every 5 seconds using theingest time of the content.If the interval is not specified, or set to 0, thenno EXT-X-PROGRAM-DATE-TIME tags will be inserted into manifests and noID3Timed Metadata messages will be generated. Note that irrespectiveof this parameter, if any ID3 Timed Metadata is found in HTTP Live Streaming (HLS) input,it will be passed through to HLS output.', 'HlsPackage$SegmentDurationSeconds' => 'Duration (in seconds) of each fragment. Actual fragments will berounded to the nearest multiple of the source fragment duration.', 'MssPackage$SegmentDurationSeconds' => 'The duration (in seconds) of each segment.', 'StreamSelection$MaxVideoBitsPerSecond' => 'The maximum video bitrate (bps) to include in output.', 'StreamSelection$MinVideoBitsPerSecond' => 'The minimum video bitrate (bps) to include in output.', ], ], '__listOfAssetShallow' => [ 'base' => NULL, 'refs' => [ 'AssetList$Assets' => 'A list of MediaPackage VOD Asset resources.', ], ], '__listOfDashManifest' => [ 'base' => NULL, 'refs' => [ 'DashPackage$DashManifests' => 'A list of DASH manifest configurations.', ], ], '__listOfEgressEndpoint' => [ 'base' => NULL, 'refs' => [ 'Asset$EgressEndpoints' => 'The list of egress endpoints available for the Asset.', ], ], '__listOfHlsManifest' => [ 'base' => NULL, 'refs' => [ 'CmafPackage$HlsManifests' => 'A list of HLS manifest configurations.', 'HlsPackage$HlsManifests' => 'A list of HLS manifest configurations.', ], ], '__listOfMssManifest' => [ 'base' => NULL, 'refs' => [ 'MssPackage$MssManifests' => 'A list of MSS manifest configurations.', ], ], '__listOfPackagingConfiguration' => [ 'base' => NULL, 'refs' => [ 'PackagingConfigurationList$PackagingConfigurations' => 'A list of MediaPackage VOD PackagingConfiguration resources.', ], ], '__listOfPackagingGroup' => [ 'base' => NULL, 'refs' => [ 'PackagingGroupList$PackagingGroups' => 'A list of MediaPackage VOD PackagingGroup resources.', ], ], '__listOf__string' => [ 'base' => NULL, 'refs' => [ 'SpekeKeyProvider$SystemIds' => 'The system IDs to include in key requests.', ], ], '__string' => [ 'base' => NULL, 'refs' => [ 'Asset$Arn' => 'The ARN of the Asset.', 'Asset$Id' => 'The unique identifier for the Asset.', 'Asset$PackagingGroupId' => 'The ID of the PackagingGroup for the Asset.', 'Asset$ResourceId' => 'The resource ID to include in SPEKE key requests.', 'Asset$SourceArn' => 'ARN of the source object in S3.', 'Asset$SourceRoleArn' => 'The IAM role_arn used to access the source S3 bucket.', 'AssetCreateParameters$Id' => 'The unique identifier for the Asset.', 'AssetCreateParameters$PackagingGroupId' => 'The ID of the PackagingGroup for the Asset.', 'AssetCreateParameters$ResourceId' => 'The resource ID to include in SPEKE key requests.', 'AssetCreateParameters$SourceArn' => 'ARN of the source object in S3.', 'AssetCreateParameters$SourceRoleArn' => 'The IAM role ARN used to access the source S3 bucket.', 'AssetList$NextToken' => 'A token that can be used to resume pagination from the end of the collection.', 'AssetShallow$Arn' => 'The ARN of the Asset.', 'AssetShallow$Id' => 'The unique identifier for the Asset.', 'AssetShallow$PackagingGroupId' => 'The ID of the PackagingGroup for the Asset.', 'AssetShallow$ResourceId' => 'The resource ID to include in SPEKE key requests.', 'AssetShallow$SourceArn' => 'ARN of the source object in S3.', 'AssetShallow$SourceRoleArn' => 'The IAM role ARN used to access the source S3 bucket.', 'DashManifest$ManifestName' => 'An optional string to include in the name of the manifest.', 'EgressEndpoint$PackagingConfigurationId' => 'The ID of the PackagingConfiguration being applied to the Asset.', 'EgressEndpoint$Url' => 'The URL of the parent manifest for the repackaged Asset.', 'HlsManifest$ManifestName' => 'An optional string to include in the name of the manifest.', 'MssManifest$ManifestName' => 'An optional string to include in the name of the manifest.', 'PackagingConfiguration$Arn' => 'The ARN of the PackagingConfiguration.', 'PackagingConfiguration$Id' => 'The ID of the PackagingConfiguration.', 'PackagingConfiguration$PackagingGroupId' => 'The ID of a PackagingGroup.', 'PackagingConfigurationCreateParameters$Id' => 'The ID of the PackagingConfiguration.', 'PackagingConfigurationCreateParameters$PackagingGroupId' => 'The ID of a PackagingGroup.', 'PackagingConfigurationList$NextToken' => 'A token that can be used to resume pagination from the end of the collection.', 'PackagingGroup$Arn' => 'The ARN of the PackagingGroup.', 'PackagingGroup$Id' => 'The ID of the PackagingGroup.', 'PackagingGroupCreateParameters$Id' => 'The ID of the PackagingGroup.', 'PackagingGroupList$NextToken' => 'A token that can be used to resume pagination from the end of the collection.', 'SpekeKeyProvider$RoleArn' => 'An Amazon Resource Name (ARN) of an IAM role that AWS ElementalMediaPackage will assume when accessing the key provider service.', 'SpekeKeyProvider$Url' => 'The URL of the external key provider service.', '__listOf__string$member' => NULL, ], ], ],];

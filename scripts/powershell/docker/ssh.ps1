# TODO: Fix the SSH
Set-Location $PSScriptRoot

[xml]$Config = Get-Content "config.xml"
$workspaceName = $Config.Settings.ContainerPrefix +"_workspace"
$workspaceId = "baae7f5cc354b50b8348a31d778cbf48671399f8432416107bc7569d46f6e545"
docker exec -it $workspaceId bash

Set-Location $PSScriptRoot
Set-Location $Config.Settings.AfterDoneLocation
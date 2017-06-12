Set-Location $PSScriptRoot

Import-Module .\Modules\ConvertFromDocker.psm1

[xml]$Config = Get-Content "config.xml"
$workspaceImage = $Config.Settings.ContainerPrefix + "_workspace"


docker ps | ConvertFrom-Docker | ForEach-Object{
    if( $_.Image -eq $workspaceImage ) {
        $workspaceId = $_.ContainerId
    }
}

Set-Location $PSScriptRoot
Set-Location $Config.Settings.AfterDoneLocation

docker exec -it $workspaceId bash
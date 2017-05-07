Set-Location $PSScriptRoot

[xml]$Config = Get-Content "config.xml"
Set-Location ($Config.Settings.DockerComposeLocation)

$Containers = $Config.Settings.Containers.Container | ForEach-Object {
    $_
}
# Write-Output "Starting containers";
docker-compose up -d $Containers

Set-Location $PSScriptRoot
Set-Location $Config.Settings.AfterDoneLocation
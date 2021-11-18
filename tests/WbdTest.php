<?php

class WbdTest extends \PHPUnit\Framework\TestCase
{
    private $wdb;

    public function setUp(): void
    {
        $this->wdb = new WindowsBaseDir\Wbd;
    }

    private function checkValidReturnType($value = null): bool
    {
        return $value === null ? true : is_string($value);
    }

    public function testGetAllPaths() : void
    {
        $paths = $this->wdb->getAllPaths();

        $this->assertIsArray($paths);
        $this->assertArrayHasKey('local_app_data', $paths);
        $this->assertArrayHasKey('common_program_files_x86', $paths);
    }

    public function testGetAllEnvironmentPaths() : void
    {
        $paths = $this->wdb->getAllEnvironmentPaths();

        $this->assertIsArray($paths);
        $this->assertArrayHasKey('LOCALAPPDATA', $paths);
        $this->assertArrayHasKey('COMMONPROGRAMFILES(X86)', $paths);
    }

    public function testGetAllUsersProfilePath(): void
    {
        $path = $this->wdb->getAllUsersProfilePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetAppDataPath(): void
    {
        $path = $this->wdb->getAppDataPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetCommonProgramFilesPath(): void
    {
        $path = $this->wdb->getCommonProgramFilesPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetCommonProgramFilesX86Path(): void
    {
        $path = $this->wdb->getCommonProgramFilesX86Path();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetComSpecPath() : void
    {
        $path = $this->wdb->getComSpecPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetHomeDrive() : void
    {
        $path = $this->wdb->getHomeDrive();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetHomeDrivePath() : void
    {
        $path = $this->wdb->getHomeDrivePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetHomePath() : void
    {
        $path = $this->wdb->getHomePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetLocalAppDataPath() : void
    {
        $path = $this->wdb->getLocalAppDataPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetLogonServerPath() : void
    {
        $path = $this->wdb->getLogonServerPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetPath(): void
    {
        $path = $this->wdb->getPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetPathEx(): void
    {
        $path = $this->wdb->getPathExt();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetProgramDataPath(): void
    {
        $path = $this->wdb->getProgramDataPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetProgramFilesPath(): void
    {
        $path = $this->wdb->getProgramFilesPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetProgramFilesX86Path(): void
    {
        $path = $this->wdb->getProgramFilesX86Path();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetSystemDrivePath(): void
    {
        $path = $this->wdb->getSystemDrivePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetSystemRootPath(): void
    {
        $path = $this->wdb->getSystemRootPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetTempPath(): void
    {
        $path = $this->wdb->getTempPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetUserDomain(): void
    {
        $path = $this->wdb->getUserDomain();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetUserDomainRoaminProfile(): void
    {
        $path = $this->wdb->getUserDomainRoaminProfile();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetUsername(): void
    {
        $path = $this->wdb->getUsername();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetUserProfilePath(): void
    {
        $path = $this->wdb->getUserProfilePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetWindirPath(): void
    {
        $path = $this->wdb->getWindirPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetPublicPath(): void
    {
        $path = $this->wdb->getPublicPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetOneDrivePath(): void
    {
        $path = $this->wdb->getOneDrivePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetDriverDataPath(): void
    {
        $path = $this->wdb->getDriverDataPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetEnvironment(): void
    {
        $environment = $this->wdb->getEnvironment();

        $this->assertTrue(strlen($environment) === 3);
    }
}

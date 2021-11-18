<?php

class WbdTest extends \PHPUnit\Framework\TestCase
{
    private $wbd;

    public function setUp(): void
    {
        $this->wbd = new WindowsBaseDir\Wbd;
    }

    private function checkValidReturnType($value = null): bool
    {
        return $value === null ? true : is_string($value);
    }

    public function testGetAllPaths() : void
    {
        $paths = $this->wbd->getAllPaths();

        $this->assertIsArray($paths);
        $this->assertArrayHasKey('local_app_data', $paths);
        $this->assertArrayHasKey('common_program_files_x86', $paths);
    }

    public function testGetAllEnvironmentPaths() : void
    {
        $paths = $this->wbd->getAllEnvironmentPaths();

        $this->assertIsArray($paths);
        $this->assertArrayHasKey('LOCALAPPDATA', $paths);
        $this->assertArrayHasKey('COMMONPROGRAMFILES(X86)', $paths);
    }

    public function testGetAllUsersProfilePath(): void
    {
        $path = $this->wbd->getAllUsersProfilePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetAppDataPath(): void
    {
        $path = $this->wbd->getAppDataPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetCommonProgramFilesPath(): void
    {
        $path = $this->wbd->getCommonProgramFilesPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetCommonProgramFilesX86Path(): void
    {
        $path = $this->wbd->getCommonProgramFilesX86Path();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetComSpecPath() : void
    {
        $path = $this->wbd->getComSpecPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetHomeDrive() : void
    {
        $path = $this->wbd->getHomeDrive();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetHomeDrivePath() : void
    {
        $path = $this->wbd->getHomeDrivePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetHomePath() : void
    {
        $path = $this->wbd->getHomePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetLocalAppDataPath() : void
    {
        $path = $this->wbd->getLocalAppDataPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetLogonServerPath() : void
    {
        $path = $this->wbd->getLogonServerPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetPath(): void
    {
        $path = $this->wbd->getPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetPathEx(): void
    {
        $path = $this->wbd->getPathExt();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetProgramDataPath(): void
    {
        $path = $this->wbd->getProgramDataPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetProgramFilesPath(): void
    {
        $path = $this->wbd->getProgramFilesPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetProgramFilesX86Path(): void
    {
        $path = $this->wbd->getProgramFilesX86Path();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetSystemDrivePath(): void
    {
        $path = $this->wbd->getSystemDrivePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetSystemRootPath(): void
    {
        $path = $this->wbd->getSystemRootPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetTempPath(): void
    {
        $path = $this->wbd->getTempPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetUserDomain(): void
    {
        $path = $this->wbd->getUserDomain();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetUserDomainRoaminProfile(): void
    {
        $path = $this->wbd->getUserDomainRoaminProfile();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetUsername(): void
    {
        $path = $this->wbd->getUsername();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetUserProfilePath(): void
    {
        $path = $this->wbd->getUserProfilePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetWindirPath(): void
    {
        $path = $this->wbd->getWindirPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetPublicPath(): void
    {
        $path = $this->wbd->getPublicPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetOneDrivePath(): void
    {
        $path = $this->wbd->getOneDrivePath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetDriverDataPath(): void
    {
        $path = $this->wbd->getDriverDataPath();

        $this->assertTrue($this->checkValidReturnType($path));
    }

    public function testGetEnvironment(): void
    {
        $environment = $this->wbd->getEnvironment();

        $this->assertTrue(strlen($environment) === 3);
    }
}

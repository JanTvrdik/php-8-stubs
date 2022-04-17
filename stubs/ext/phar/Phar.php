<?php 

class Phar extends \RecursiveDirectoryIterator implements \Countable, \ArrayAccess
{
    public function __construct(string $filename, int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS, ?string $alias = null)
    {
    }
    public function __destruct()
    {
    }
    /** @tentative-return-type */
    public function addEmptyDir(string $directory)
    {
    }
    /** @tentative-return-type */
    public function addFile(string $filename, ?string $localName = null)
    {
    }
    /** @tentative-return-type */
    public function addFromString(string $localName, string $contents)
    {
    }
    /** @tentative-return-type */
    public function buildFromDirectory(string $directory, string $pattern = "")
    {
    }
    /** @tentative-return-type */
    public function buildFromIterator(Traversable $iterator, ?string $baseDirectory = null)
    {
    }
    /** @tentative-return-type */
    public function compressFiles(int $compression)
    {
    }
    /** @return bool */
    public function decompressFiles()
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    public function compress(int $compression, ?string $extension = null)
    {
    }
    /** @tentative-return-type */
    public function decompress(?string $extension = null)
    {
    }
    /** @tentative-return-type */
    public function convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null)
    {
    }
    /** @tentative-return-type */
    public function convertToData(?int $format = null, ?int $compression = null, ?string $extension = null)
    {
    }
    /** @return bool */
    public function copy(string $from, string $to)
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    public function count(int $mode = COUNT_NORMAL)
    {
    }
    /** @return bool */
    public function delete(string $localName)
    {
    }
    // TODO make return type void
    /** @return bool */
    public function delMetadata()
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    public function extractTo(string $directory, array|string|null $files = null, bool $overwrite = false)
    {
    }
    /** @tentative-return-type */
    public function getAlias()
    {
    }
    /** @tentative-return-type */
    public function getPath()
    {
    }
    /** @tentative-return-type */
    public function getMetadata(array $unserializeOptions = [])
    {
    }
    /** @tentative-return-type */
    public function getModified()
    {
    }
    /** @tentative-return-type */
    public function getSignature()
    {
    }
    /** @tentative-return-type */
    public function getStub()
    {
    }
    /** @tentative-return-type */
    public function getVersion()
    {
    }
    /** @tentative-return-type */
    public function hasMetadata()
    {
    }
    /** @tentative-return-type */
    public function isBuffering()
    {
    }
    /** @tentative-return-type */
    public function isCompressed()
    {
    }
    /** @tentative-return-type */
    public function isFileFormat(int $format)
    {
    }
    /** @tentative-return-type */
    public function isWritable()
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     */
    public function offsetExists($localName)
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     */
    public function offsetGet($localName)
    {
    }
    /**
     * @param string $localName
     * @param resource|string $value
     * @tentative-return-type
     */
    public function offsetSet($localName, $value)
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     */
    public function offsetUnset($localName)
    {
    }
    /** @tentative-return-type */
    public function setAlias(string $alias)
    {
    }
    /** @tentative-return-type */
    public function setDefaultStub(?string $index = null, ?string $webIndex = null)
    {
    }
    /** @tentative-return-type */
    public function setMetadata(mixed $metadata)
    {
    }
    /** @tentative-return-type */
    public function setSignatureAlgorithm(int $algo, ?string $privateKey = null)
    {
    }
    /**
     * @param resource|string $stub
     * @return bool
     */
    public function setStub($stub, int $length = UNKNOWN)
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    public function startBuffering()
    {
    }
    /** @tentative-return-type */
    public function stopBuffering()
    {
    }
    public static final function apiVersion() : string
    {
    }
    public static final function canCompress(int $compression = 0) : bool
    {
    }
    public static final function canWrite() : bool
    {
    }
    public static final function createDefaultStub(?string $index = null, ?string $webIndex = null) : string
    {
    }
    public static final function getSupportedCompression() : array
    {
    }
    public static final function getSupportedSignatures() : array
    {
    }
    public static final function interceptFileFuncs() : void
    {
    }
    public static final function isValidPharFilename(string $filename, bool $executable = true) : bool
    {
    }
    public static final function loadPhar(string $filename, ?string $alias = null) : bool
    {
    }
    public static final function mapPhar(?string $alias = null, int $offset = 0) : bool
    {
    }
    public static final function running(bool $returnPhar = true) : string
    {
    }
    public static final function mount(string $pharPath, string $externalPath) : void
    {
    }
    public static final function mungServer(array $variables) : void
    {
    }
    public static final function unlinkArchive(string $filename) : bool
    {
    }
    // TODO make return type void
    public static final function webPhar(?string $alias = null, ?string $index = null, ?string $fileNotFoundScript = null, array $mimeTypes = [], ?callable $rewrite = null) : void
    {
    }
}
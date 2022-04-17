<?php 

class PharData extends \RecursiveDirectoryIterator implements \Countable, \ArrayAccess
{
    /**
     * @implementation-alias Phar::__construct
     * @no-verify PharData constructor accepts extra $format argument
     */
    public function __construct(string $filename, int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS, ?string $alias = null, int $format = 0)
    {
    }
    /** @implementation-alias Phar::__destruct */
    public function __destruct()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::addEmptyDir
     */
    public function addEmptyDir(string $directory)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::addFile
     */
    public function addFile(string $filename, ?string $localName = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::addFromString
     */
    public function addFromString(string $localName, string $contents)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::buildFromDirectory
     */
    public function buildFromDirectory(string $directory, string $pattern = "")
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::buildFromIterator
     */
    public function buildFromIterator(Traversable $iterator, ?string $baseDirectory = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::compressFiles
     */
    public function compressFiles(int $compression)
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::decompressFiles
     */
    public function decompressFiles()
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @implementation-alias Phar::compress
     * @no-verify
     */
    public function compress(int $compression, ?string $extension = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::decompress
     * @no-verify
     */
    public function decompress(?string $extension = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::convertToExecutable
     */
    public function convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::convertToData
     */
    public function convertToData(?int $format = null, ?int $compression = null, ?string $extension = null)
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::copy
     */
    public function copy(string $from, string $to)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @implementation-alias Phar::count
     */
    public function count(int $mode = COUNT_NORMAL)
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::delete
     */
    public function delete(string $localName)
    {
    }
    // TODO make return type void
    /**
     * @return bool
     * @implementation-alias Phar::delMetadata
     */
    public function delMetadata()
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @implementation-alias Phar::extractTo
     */
    public function extractTo(string $directory, array|string|null $files = null, bool $overwrite = false)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getAlias
     */
    public function getAlias()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getPath
     */
    public function getPath()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getMetadata
     */
    public function getMetadata(array $unserializeOptions = [])
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getModified
     */
    public function getModified()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getSignature
     */
    public function getSignature()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getStub
     */
    public function getStub()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getVersion
     */
    public function getVersion()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::hasMetadata
     */
    public function hasMetadata()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::isBuffering
     */
    public function isBuffering()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::isCompressed
     */
    public function isCompressed()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::isFileFormat
     */
    public function isFileFormat(int $format)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::isWritable
     */
    public function isWritable()
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     * @implementation-alias Phar::offsetExists
     */
    public function offsetExists($localName)
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     * @implementation-alias Phar::offsetGet
     */
    public function offsetGet($localName)
    {
    }
    /**
     * @param string $localName
     * @param resource|string $value
     * @tentative-return-type
     * @implementation-alias Phar::offsetSet
     */
    public function offsetSet($localName, $value)
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     * @implementation-alias Phar::offsetUnset
     */
    public function offsetUnset($localName)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::setAlias
     */
    public function setAlias(string $alias)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::setDefaultStub
     */
    public function setDefaultStub(?string $index = null, ?string $webIndex = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::setMetadata
     */
    public function setMetadata(mixed $metadata)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::setSignatureAlgorithm
     */
    public function setSignatureAlgorithm(int $algo, ?string $privateKey = null)
    {
    }
    /**
     * @param resource|string $stub
     * @return bool
     * @implementation-alias Phar::setStub
     */
    public function setStub($stub, int $length = UNKNOWN)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @implementation-alias Phar::startBuffering
     */
    public function startBuffering()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::stopBuffering
     */
    public function stopBuffering()
    {
    }
    /** @implementation-alias Phar::apiVersion */
    public static final function apiVersion() : string
    {
    }
    /** @implementation-alias Phar::canCompress */
    public static final function canCompress(int $compression = 0) : bool
    {
    }
    /** @implementation-alias Phar::canWrite */
    public static final function canWrite() : bool
    {
    }
    /** @implementation-alias Phar::createDefaultStub */
    public static final function createDefaultStub(?string $index = null, ?string $webIndex = null) : string
    {
    }
    /** @implementation-alias Phar::getSupportedCompression */
    public static final function getSupportedCompression() : array
    {
    }
    /** @implementation-alias Phar::getSupportedSignatures */
    public static final function getSupportedSignatures() : array
    {
    }
    /** @implementation-alias Phar::interceptFileFuncs */
    public static final function interceptFileFuncs() : void
    {
    }
    /** @implementation-alias Phar::isValidPharFilename */
    public static final function isValidPharFilename(string $filename, bool $executable = true) : bool
    {
    }
    /** @implementation-alias Phar::loadPhar */
    public static final function loadPhar(string $filename, ?string $alias = null) : bool
    {
    }
    /** @implementation-alias Phar::mapPhar */
    public static final function mapPhar(?string $alias = null, int $offset = 0) : bool
    {
    }
    /** @implementation-alias Phar::running */
    public static final function running(bool $returnPhar = true) : string
    {
    }
    /** @implementation-alias Phar::mount */
    public static final function mount(string $pharPath, string $externalPath) : void
    {
    }
    /** @implementation-alias Phar::mungServer */
    public static final function mungServer(array $variables) : void
    {
    }
    /** @implementation-alias Phar::unlinkArchive */
    public static final function unlinkArchive(string $filename) : bool
    {
    }
    // TODO make return type void
    /** @implementation-alias Phar::webPhar */
    public static final function webPhar(?string $alias = null, ?string $index = null, ?string $fileNotFoundScript = null, array $mimeTypes = [], ?callable $rewrite = null) : void
    {
    }
}
<?php

namespace ParaSync\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class FinishedCopyEvent.
 *
 * @package ParaSync\Event
 */
class FinishedCopyEvent extends Event
{
    const NAME = 'finished.copy';

    /**
     * The source file.
     *
     * @var \Symfony\Component\HttpFoundation\File\File
     */
    private $sourceFile;

    /**
     * The target file.
     *
     * @var \Symfony\Component\HttpFoundation\File\File
     */
    private $targetFile;

    /**
     * FinishedCopyEvent constructor.
     *
     * @param \Symfony\Component\HttpFoundation\File\File $sourceFile
     *   The source file.
     * @param \Symfony\Component\HttpFoundation\File\File $targetFile
     *   The target file.
     */
    public function __construct(File $sourceFile, File $targetFile)
    {
        $this->sourceFile = $sourceFile;
        $this->targetFile = $targetFile;
    }

    /**
     * Returns sourceFile.
     *
     * @return \Symfony\Component\HttpFoundation\File\File
     */
    public function getSourceFile()
    {
        return $this->sourceFile;
    }

    /**
     * Returns targetFile.
     *
     * @return \Symfony\Component\HttpFoundation\File\File
     */
    public function getTargetFile()
    {
        return $this->targetFile;
    }
}

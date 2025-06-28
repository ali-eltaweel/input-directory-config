<?php

namespace Config;

use DTO\DataTransferObject;
use DTO\Validation\Min;

/**
 * Input directory configuration.
 * 
 * @api
 * @final
 * @since 1.0.0
 * @version 1.0.0
 * @package input-directory-config
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 * 
 * @property-read string $path              The path to the directory.
 * @property-read bool   $followSymlinks    Whether to follow symbolic links.
 * @property-read int    $maxDepth          The maximum depth to traverse the directory structure.
 * @property-read bool   $childrenFirst     Whether to process children before the parent directory.
 */
final class InputDirectory extends DataTransferObject {

    /**
     * Creates a new input directory configuration instance.
     * 
     * @api
     * @final
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $path              The path to the directory.
     * @param bool   $followSymlinks    Whether to follow symbolic links.
     * @param int    $maxDepth          The maximum depth to traverse the directory structure.
     * @param bool   $childrenFirst     Whether to process children before the parent directory.
     */
    public final function __construct(
        
                  string $path,
                  bool   $followSymlinks = true,
        #[Min(1)] int    $maxDepth       = 32,
                  bool   $childrenFirst  = false
    ) {
        
        parent::__construct(func_get_args());
    }
}

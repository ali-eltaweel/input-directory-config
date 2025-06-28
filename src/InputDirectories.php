<?php

namespace Config;

use DTO\DataTransferCollection;

/**
 * Input directories configuration collection.
 * 
 * @extends DataTransferCollection<InputDirectory>
 * 
 * @api
 * @final
 * @since 1.0.0
 * @version 1.0.0
 * @package input-directory-config
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
final class InputDirectories extends DataTransferCollection {

    /**
     * Specified the type of the collection's elements.
     * 
     * @api
     * @final
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param InputDirectory $_
     * @return void
     */
    public final function __v(InputDirectory $_) {}
}

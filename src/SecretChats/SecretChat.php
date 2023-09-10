<?php

declare(strict_types=1);

/**
 * Secret chat module.
 *
 * This file is part of MadelineProto.
 * MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 * You should have received a copy of the GNU General Public License along with MadelineProto.
 * If not, see <http://www.gnu.org/licenses/>.
 *
 * @author    Daniil Gentili <daniil@daniil.it>
 * @copyright 2016-2023 Daniil Gentili <daniil@daniil.it>
 * @license   https://opensource.org/licenses/AGPL-3.0 AGPLv3
 * @link https://docs.madelineproto.xyz MadelineProto documentation
 */

namespace danog\MadelineProto\SecretChats;

use AssertionError;
use danog\MadelineProto\Logger;
use danog\MadelineProto\Loop\Secret\SecretFeedLoop;
use danog\MadelineProto\MTProto;
use danog\MadelineProto\MTProtoTools\Crypt;
use danog\MadelineProto\SecurityException;
use danog\MadelineProto\Tools;
use phpseclib3\Math\BigInteger;

/**
 * Represents a secret chat.
 */
final class SecretChat {
    public function __construct(
        public readonly int $chatId,
        public readonly bool $creator,
        public readonly int $otherID,
        /** Creation date */
        public readonly int $created,
        public int $ttl = 0
    )
    {
        
    }
    
}
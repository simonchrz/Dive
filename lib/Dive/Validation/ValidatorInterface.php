<?php
/*
 * This file is part of the Dive ORM framework.
 * (c) Steffen Zeidler <sigma_z@sigma-scripts.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Dive\Validation;

/**
 * Interface ValidatorInterface
 */
interface ValidatorInterface
{

    const VALIDATOR_FIELD_LENGTH = 'fieldLength';
    const VALIDATOR_FIELD_TYPE = 'fieldType';
    const VALIDATOR_UNIQUE_CONSTRAINT = 'uniqueConstraint';


    /**
     * @param  mixed $value
     * @return bool
     */
    public function validate($value);

}

<?php
 /*
 * This file is part of the Dive ORM framework.
 * (c) Steffen Zeidler <sigma_z@sigma-scripts.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * @author  Steffen Zeidler <sigma_z@sigma-scripts.de>
 * @created 14.03.13
 */


namespace Dive\Hydrator;

use Dive\Table;


class SingleArrayHydrator extends AbstractHydrator
{

    /**
     * Gets statement result
     *
     * @param  \Dive\Table|null $table
     * @return mixed
     */
    public function getResult(Table $table = null)
    {
        $row = $this->statement->fetch(\PDO::FETCH_ASSOC);
        $this->statement->closeCursor();
        return $row;
    }

}
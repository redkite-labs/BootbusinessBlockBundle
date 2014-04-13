<?php
/*
 * This file is part of the RedKite CMS Application and it is distributed
 * under the MIT LICENSE. To use this application you must leave
 * intact this copyright notice.
 *
 * Copyright (c) RedKiteCms <webmaster@redkite-labs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://www.redkite-labs.com
 *
 * @license    MIT LICENSE
 *
 */

namespace RedKiteLabs\RedKiteCms\BootbusinessBlockBundle\Core\Form;

use RedKiteLabs\RedKiteCms\TwitterBootstrapBundle\Core\Form\Button\Three\ButtonType as BaseButtonType;
use Symfony\Component\Form\FormBuilderInterface;

class ButtonType extends BaseButtonType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder->add('button_href');
    }
}

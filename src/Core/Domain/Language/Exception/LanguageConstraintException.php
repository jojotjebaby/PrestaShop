<?php
/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\PrestaShop\Core\Domain\Language\Exception;

/**
 * Is thrown when invalid data is supplied for language
 */
class LanguageConstraintException extends LanguageException
{
    /**
     * @var int Code is used when invalid language IETF tag is encountered
     */
    const INVALID_IETF_TAG = 1;

    /**
     * @var int Code is used when invalid language ISO code in encountered
     */
    const INVALID_ISO_CODE = 2;

    /**
     * @var int Code is used when duplicate language ISO code in encountered when creating new language
     */
    const DUPLICATE_ISO_CODE = 3;

    /**
     * @var int Code is used when empty data is used when deleting languages
     */
    const EMPTY_BULK_DELETE = 4;
}

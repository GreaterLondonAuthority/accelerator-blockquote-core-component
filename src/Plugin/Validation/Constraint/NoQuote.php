<?php

namespace Drupal\gla_blockquote\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Checks that the submitted value does not contain double quotes.
 *
 * @Constraint(
 *   id = "NoQuote",
 *   label = @Translation("No Quote Marks", context = "Validation"),
 *   type = "string"
 * )
 */
class NoQuote extends Constraint {

  /**
   * The text to display on error.
   *
   * @var string
   */
  public $hasQuotes = 'Quotation marks will automatically be added by the system around the full quote. Please use single quotation marks to identify quotes within the full quote.';

}

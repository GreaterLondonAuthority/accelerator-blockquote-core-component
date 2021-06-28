<?php

namespace Drupal\gla_blockquote\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the UniqueInteger constraint.
 */
class NoQuoteValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($items, Constraint $constraint) {
    foreach ($items as $item) {
      if ($this->hasQuotes($item->value)) {
        $this->context->addViolation($constraint->hasQuotes, ['%value' => $item->value]);
      }
    }
  }

  /**
   * String contains quote marks.
   *
   * @param string $value
   *   Thew value to test.
   *
   * @return bool
   *   TRUE if quotes are found.
   */
  private function hasQuotes(string $value) {
    $matches = [];

    preg_match_all('"', $value,$matches);

    return !empty($matches);
  }

}

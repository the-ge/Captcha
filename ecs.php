<?php declare(strict_types=1);

/**
 * vendor/bin/ecs check src
 * vendor/bin/ecs check src --fix
 */

use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer;

use PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\LanguageConstruct\FunctionToConstantFixer;
use PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer;
use PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer;
use PhpCsFixer\Fixer\CastNotation\CastSpacesFixer;
use PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff;

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__.'/ecs.php',
        __DIR__.'/rector.php',
        __DIR__.'/config',
        __DIR__.'/src',
        __DIR__.'/packages',
        __DIR__.'/tests',
        __DIR__.'/packages-tests',
    ]);

    //$ecsConfig->sets([
    //    SetList::PSR_12,                                  // [1]
    //    //SetList::SYMPLIFY,
    //]);

    //$ecsConfig->skip([
    //    BinaryOperatorSpacesFixer::class,                 // [1]
    //    OrderedImportsFixer::class,                       // [1]
    //]);

    //$ecsConfig->ruleWithConfiguration(BinaryOperatorSpacesFixer::class, [
    //    'default' => 'align_single_space_minimal',
    //]);
    //$ecsConfig->ruleWithConfiguration(::class, [
    //    '' => '',
    //]);

    //$ecsConfig->rule(VoidReturnFixer::class);               // [2]

    //$ecsConfig->rule(DeclareStrictTypesFixer::class);
    $ecsConfig->rule(StrictComparisonFixer::class);
    //$ecsConfig->rule(NoEmptyPhpdocFixer::class);
    //$ecsConfig->rule(NoSuperfluousPhpdocTagsFixer::class);
    //$ecsConfig->rule(CastSpacesFixer::class);
    //$ecsConfig->rule(NoWhitespaceInBlankLineFixer::class);
    //$ecsConfig->rule(SuperfluousWhitespaceSniff::class);
};

<?php declare(strict_types=1);

/**
 * vendor/bin/ecs check src
 * vendor/bin/ecs check src --fix
 */

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer;
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

    $ecsConfig->sets([
        SetList::PSR_12,
        //SetList::COMMON,
        //SetList::SYMPLIFY,
    ]);

    $ecsConfig->skip([
        BinaryOperatorSpacesFixer::class,
        OrderedImportsFixer::class,
    ]);

    //$ecsConfig->ruleWithConfiguration(ArraySyntaxFixer::class, [
    //    'syntax' => 'short',
    //]);
    //$ecsConfig->ruleWithConfiguration(BinaryOperatorSpacesFixer::class, [
    //    'default' => 'align_single_space_minimal',
    //]);
};

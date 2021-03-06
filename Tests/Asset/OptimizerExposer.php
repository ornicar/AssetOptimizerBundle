<?php
namespace Bundle\Adenclassifieds\AssetOptimizerBundle\Tests\Asset;

use Bundle\Adenclassifieds\AssetOptimizerBundle\Helper\BaseHelper;

use Bundle\Adenclassifieds\AssetOptimizerBundle\Asset\Optimizer;

/**
 * Exposer for the get file name method
 *
 * @author dstendardi
 */
class OptimizerExposer extends Optimizer
{
    /**
     * (non-PHPdoc)
     * @see src/Bundle/AssetOptimizerBundle/Asset/Bundle\Adenclassifieds\AssetOptimizerBundle\Asset.Optimizer::compress()
     */
    protected function compress($filepath)
    {
        //;
    }

    /**
     * Exposes the protected get file name method
     *
     * @param BaseHelper helper
     */
    public function exposeGetFileName(array $resources)
    {
        return $this->getFileName($resources);
    }

    /**
     * Exposes the protected get file name method
     *
     * @param BaseHelper helper
     */
    public function exposeProcess(array $resources)
    {
        return $this->process($resources);
    }
}
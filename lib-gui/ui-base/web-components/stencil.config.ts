import { Config } from '@stencil/core';
import { reactOutputTarget } from '@stencil/react-output-target';

export const config: Config = {
  namespace: 'ui-base',
  outputTargets: [
    reactOutputTarget({
        componentCorePackage: '@userfrosting/ui-base-web-components',
        proxiesFile: '../react-components/src/main.ts',
        includeDefineCustomElements: true,
    }),
    {
      type: 'dist',
      esmLoaderPath: 'loader',
      dir: 'out/dist'
    },
    {
      type: 'dist-custom-elements-bundle',
      dir: 'out/dist'
    },
    {
      type: 'docs-readme',
      dir: 'out/docs',
    },
    {
      type: 'www',
      serviceWorker: null, // disable service workers
      dir: 'out/www'
    },
  ],
};

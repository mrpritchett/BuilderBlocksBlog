const pkg = require('./package.json');

module.exports = {
	// Project Identity
	appName: 'builderBlocksBlog', // Unique name of your project
	type: 'theme', // Plugin or theme
	slug: 'builder-blocks-blog', // Plugin or Theme slug, basically the directory name under `wp-content/<themes|plugins>`
	// Used to generate banners on top of compiled stuff
	bannerConfig: {
		name: 'builderBlocksBlog',
		author: '',
		license: 'GPLv2',
		link: 'https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html',
		version: pkg.version,
		copyrightText:
			'This software is released under the GPLv2 License\nhttps://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html',
		credit: false,
	},
	// Files we need to compile, and where to put
	files: [
    {
      name: 'main',
      entry: {
        main: ['./assets/scss/main.scss'],
      }
    }
	],
	// Output path relative to the context directory
	// We need relative path here, else, we can not map to publicPath
	outputPath: 'assets/dist',
	// Project specific config
	// Needs react(jsx)?
	hasReact: true,
	// Needs sass?
	hasSass: true,
	// Needs less?
	hasLess: false,
	// Needs flowtype?
	hasFlow: false,
	// Externals
	// <https://webpack.js.org/configuration/externals/>
	externals: {
		jquery: 'jQuery',
	},
	// Webpack Aliases
	// <https://webpack.js.org/configuration/resolve/#resolve-alias>
	alias: undefined,
	// Show overlay on development
	errorOverlay: true,
	// Auto optimization by webpack
	// Split all common chunks with default config
	// <https://webpack.js.org/plugins/split-chunks-plugin/#optimization-splitchunks>
	// Won't hurt because we use PHP to automate loading
	optimizeSplitChunks: true,
	// Usually PHP and other files to watch and reload when changed
	watch: './**/*.php',
	// Files that you want to copy to your ultimate theme/plugin package
	// Supports glob matching from minimatch
	// @link <https://github.com/isaacs/minimatch#usage>
	packageFiles: [
		'inc/**',
		'vendor/**',
		'assets/dist/**',
		'*.php',
		'*.md',
		'readme.txt',
		'languages/**',
		'layouts/**',
		'LICENSE',
		'*.css',
	],
	// Path to package directory, relative to the root
	packageDirPath: 'package',
};

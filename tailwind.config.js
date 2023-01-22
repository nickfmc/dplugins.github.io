module.exports = {
  content: [
      './_site/**/*.html',
      './_includes/**/*.html',
      './_layouts/**/*.html',
      './_posts/*.md',
      './*.html',
    ],
    theme: {

      spacing: {
        '0'     : '0',
        'sm'    : 'var(--space-size-sm)',
        'base'  : 'var(--space-size-base)',
        'md'    : 'var(--space-size-md)',
        'lg'    : 'var(--space-size-lg)',
        'xl'    : 'var(--space-size-xl)',
        'xxl'   : 'var(--space-size-xxl)',
        'xxxl'  : 'var(--space-size-xxxl)',
        'giga'  : 'var(--space-size-giga)'        
      },
      
      fontSize: {
        'sm'    :  'var(--font-size-sm)',
        'base'  :  'var(--font-size-base)',
        'md'    :  'var(--font-size-md)',
        'lg'    :  'var(--font-size-lg)',
        'xl'    :  'var(--font-size-xl)',
        'giga'  :  'var(--font-size-giga)'
      }
    },
    variants: {},
    plugins: [],
  }



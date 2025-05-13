module.exports = {
  content: [
    "./resources/**/*.blade.php", 
    "./resources/**/*.js", 
    "./resources/**/*.vue",
    "./public/assets/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#009ef7',
          light: '#f1faff',
          dark: '#0095e8',
          active: '#0095e8',
        },
        success: {
          DEFAULT: '#50cd89',
          light: '#e8fff3',
          dark: '#47be7d',
          active: '#47be7d',
        },
        info: {
          DEFAULT: '#7239ea',
          light: '#f8f5ff',
          dark: '#6c35dc',
          active: '#6c35dc',
        },
        warning: {
          DEFAULT: '#ffc700',
          light: '#fff8dd',
          dark: '#f1bc00',
          active: '#f1bc00',
        },
        danger: {
          DEFAULT: '#f1416c',
          light: '#fff5f8',
          dark: '#d9214e',
          active: '#d9214e',
        },
        // Colores necesarios para los componentes
        accent: {
          DEFAULT: '#f1f5f9', // Color para elementos activos
        },
        border: {
          DEFAULT: '#e2e8f0', // Color para bordes
        },
        popover: {
          DEFAULT: '#ffffff', // Color de fondo para popovers
          foreground: '#334155', // Color de texto para popovers
        },
        foreground: {
          DEFAULT: '#334155', // Color de texto principal
        },
        muted: {
          foreground: '#64748b', // Color de texto secundario
        },
        mono: {
          DEFAULT: '#1e293b', // Color de texto oscuro
        },
        input: {
          DEFAULT: '#e2e8f0', // Color para fondos de inputs
        },
        background: {
          DEFAULT: '#ffffff', // Color de fondo general
        }
      },
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
      },
      fontSize: {
        '2sm': '0.9375rem', // 15px
        'xs': '0.75rem',    // 12px
      },
      spacing: {
        '0.25': '0.0625rem', // 1px
        '0.5': '0.125rem',   // 2px
        '3.25': '0.8125rem', // 13px
        '7.5': '1.875rem',   // 30px
      },
      borderRadius: {
        'md': '0.375rem',    // 6px
        'lg': '0.5rem',      // 8px
        'xl': '0.75rem',     // 12px
      },
      boxShadow: {
        'sm': '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
      },
      zIndex: {
        '1': '1',
      },
      size: {
        '3.25': '0.8125rem', // 13px
        '5': '1.25rem',      // 20px
        '20': '5rem',        // 80px
      },
      grow: {
        '1': '1',
      },
      inset: {
        '0.25': '0.0625rem', // 1px
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
  // Añadir variables CSS personalizadas
  corePlugins: {
    preflight: true,
  },
}
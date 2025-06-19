import React from 'react';

/**
 * Button component with Tailwind CSS styling
 * @param {string} type - Button type (button, submit, reset)
 * @param {string} variant - Button variant (primary, secondary, outline, danger)
 * @param {function} onClick - onClick handler
 * @param {boolean} disabled - If the button is disabled
 * @param {boolean} fullWidth - If the button should take full width
 * @param {node} children - Button content
 */
const Button = ({
  type = 'button',
  variant = 'primary',
  onClick,
  disabled = false,
  fullWidth = false,
  children,
}) => {
  const baseClasses = 'px-4 py-2 rounded-md font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors';
  
  const variantClasses = {
    primary: 'bg-blue-600 hover:bg-blue-700 text-white focus:ring-blue-500',
    secondary: 'bg-gray-600 hover:bg-gray-700 text-white focus:ring-gray-500',
    outline: 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 focus:ring-blue-500',
    danger: 'bg-red-600 hover:bg-red-700 text-white focus:ring-red-500',
  };

  const widthClass = fullWidth ? 'w-full' : '';
  const disabledClass = disabled ? 'opacity-50 cursor-not-allowed' : '';

  return (
    <button
      type={type}
      onClick={onClick}
      disabled={disabled}
      className={`${baseClasses} ${variantClasses[variant]} ${widthClass} ${disabledClass}`}
    >
      {children}
    </button>
  );
};

export default Button;
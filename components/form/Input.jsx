import React from 'react';

/**
 * Input component with Tailwind CSS styling
 * @param {string} type - Input type (text, email, password, etc.)
 * @param {string} label - Label text
 * @param {string} name - Input name
 * @param {string} id - Input id
 * @param {string} placeholder - Placeholder text
 * @param {string} value - Input value
 * @param {function} onChange - onChange handler
 * @param {boolean} required - If the field is required
 * @param {string} error - Error message
 */
const Input = ({
  type = 'text',
  label,
  name,
  id,
  placeholder,
  value,
  onChange,
  required = false,
  error,
}) => {
  return (
    <div className="mb-4">
      {label && (
        <label 
          htmlFor={id} 
          className="block text-sm font-medium text-gray-700 mb-1"
        >
          {label}
          {required && <span className="text-red-500 ml-1">*</span>}
        </label>
      )}
      <input
        type={type}
        name={name}
        id={id}
        value={value}
        onChange={onChange}
        placeholder={placeholder}
        required={required}
        className={`w-full px-3 py-2 border ${
          error ? 'border-red-500' : 'border-gray-300'
        } rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500`}
      />
      {error && <p className="mt-1 text-sm text-red-500">{error}</p>}
    </div>
  );
};

export default Input;
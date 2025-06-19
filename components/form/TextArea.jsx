import React from 'react';

/**
 * TextArea component with Tailwind CSS styling
 * @param {string} label - Label text
 * @param {string} name - TextArea name
 * @param {string} id - TextArea id
 * @param {string} placeholder - Placeholder text
 * @param {string} value - TextArea value
 * @param {function} onChange - onChange handler
 * @param {boolean} required - If the field is required
 * @param {string} error - Error message
 * @param {number} rows - Number of rows
 */
const TextArea = ({
  label,
  name,
  id,
  placeholder,
  value,
  onChange,
  required = false,
  error,
  rows = 4,
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
      <textarea
        name={name}
        id={id}
        rows={rows}
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

export default TextArea;
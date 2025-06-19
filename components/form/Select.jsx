import React from 'react';

/**
 * Select component with Tailwind CSS styling
 * @param {string} label - Label text
 * @param {string} name - Select name
 * @param {string} id - Select id
 * @param {array} options - Array of options [{value: '', label: ''}]
 * @param {string} value - Selected value
 * @param {function} onChange - onChange handler
 * @param {boolean} required - If the field is required
 * @param {string} error - Error message
 * @param {string} placeholder - Placeholder text
 */
const Select = ({
  label,
  name,
  id,
  options = [],
  value,
  onChange,
  required = false,
  error,
  placeholder,
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
      <select
        name={name}
        id={id}
        value={value}
        onChange={onChange}
        required={required}
        className={`w-full px-3 py-2 border ${
          error ? 'border-red-500' : 'border-gray-300'
        } bg-white rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500`}
      >
        {placeholder && (
          <option value="" disabled>
            {placeholder}
          </option>
        )}
        {options.map((option) => (
          <option key={option.value} value={option.value}>
            {option.label}
          </option>
        ))}
      </select>
      {error && <p className="mt-1 text-sm text-red-500">{error}</p>}
    </div>
  );
};

export default Select;
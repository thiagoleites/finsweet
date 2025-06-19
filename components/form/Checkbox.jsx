import React from 'react';

/**
 * Checkbox component with Tailwind CSS styling
 * @param {string} label - Label text
 * @param {string} name - Checkbox name
 * @param {string} id - Checkbox id
 * @param {boolean} checked - Checked state
 * @param {function} onChange - onChange handler
 * @param {boolean} required - If the field is required
 * @param {string} error - Error message
 */
const Checkbox = ({
  label,
  name,
  id,
  checked,
  onChange,
  required = false,
  error,
}) => {
  return (
    <div className="mb-4">
      <div className="flex items-center">
        <input
          type="checkbox"
          name={name}
          id={id}
          checked={checked}
          onChange={onChange}
          required={required}
          className="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
        />
        {label && (
          <label 
            htmlFor={id} 
            className="ml-2 block text-sm text-gray-700"
          >
            {label}
            {required && <span className="text-red-500 ml-1">*</span>}
          </label>
        )}
      </div>
      {error && <p className="mt-1 text-sm text-red-500">{error}</p>}
    </div>
  );
};

export default Checkbox;
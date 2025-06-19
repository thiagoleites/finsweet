import React from 'react';

/**
 * Radio component with Tailwind CSS styling
 * @param {string} label - Label text
 * @param {string} name - Radio name
 * @param {string} id - Radio id
 * @param {string} value - Radio value
 * @param {string} checkedValue - Currently selected value
 * @param {function} onChange - onChange handler
 * @param {boolean} required - If the field is required
 */
const Radio = ({
  label,
  name,
  id,
  value,
  checkedValue,
  onChange,
  required = false,
}) => {
  return (
    <div className="flex items-center mb-2">
      <input
        type="radio"
        name={name}
        id={id}
        value={value}
        checked={value === checkedValue}
        onChange={onChange}
        required={required}
        className="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300"
      />
      {label && (
        <label 
          htmlFor={id} 
          className="ml-2 block text-sm text-gray-700"
        >
          {label}
        </label>
      )}
    </div>
  );
};

export default Radio;
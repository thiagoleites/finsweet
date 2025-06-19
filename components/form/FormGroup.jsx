import React from 'react';

/**
 * FormGroup component with Tailwind CSS styling
 * @param {string} title - Form group title
 * @param {string} description - Form group description
 * @param {node} children - Form group content
 */
const FormGroup = ({
  title,
  description,
  children,
}) => {
  return (
    <div className="mb-8">
      {title && (
        <h3 className="text-lg font-medium text-gray-900 mb-2">{title}</h3>
      )}
      {description && (
        <p className="text-sm text-gray-500 mb-4">{description}</p>
      )}
      <div className="space-y-4">
        {children}
      </div>
    </div>
  );
};

export default FormGroup;
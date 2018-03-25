const confirmDeleteUser = () => {
  const message = 'Are you sure to delete this user?';
  return window.confirm(message);
};

window.confirmDeleteUser = confirmDeleteUser;

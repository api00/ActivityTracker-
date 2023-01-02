package com.service;

import com.domain.Blog;
import com.domain.Goal;
import com.domain.TaxUser;

import java.util.List;

public interface GoalService {

    public Goal insert(Goal goal);

    public Goal get(int id);

    public List<Goal> getAll();

    public Goal update(Goal goal);

    public void delete(int id);
}
